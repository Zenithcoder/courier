<?php

namespace App\Http\Controllers\Customer;

use App\Order;
use App\User;
use Paginate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $customer = User::customers()->findOrFail($id);

        $orders = $customer->customer_orders()->filter()->globalSearch(['tracking_number'])
            ->with(["pickup_lga", "pickup_lga.state", "drop_off_lga", "drop_off_lga.state"])
            ->latest()->paginate(getPaginateSize());


        return view('modified.admin.customer.order.index', compact("customer", "orders"));
    }

    /**
     * Display a listing of the order for logged in customer.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $orders = auth()->user()->customer_orders()
            ->with(['pickup_lga', 'pickup_lga.state', 'drop_off_lga', 'drop_off_lga.state'])
            ->paginate(getPaginateSize());
    
        return view('user.dashboard', compact("orders"));
    }

    public function pickup()
    {
        return view('/user/pickupform');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function create(User $user){
        return view('/user.pickupform', compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search (Request $request ) {
        $orders=  Order::whereTrackingNumber($request->get('tracking_number'))->first();
        dd($orders);
    }


    public function store(Request $request){
        $this->validate($request,[
            'pickup_address' => 'required',
            'pickup_lga_id' => 'required|exists:lgas,id',
            'drop_off_address' => 'required',
            'drop_off_lga_id' => 'required|exists:lgas,id',
            'description' => 'required',
            'recipient_name' => 'required',
            'recipient_phone_number' => 'required',
        ]);
        auth()->user()->customer_orders()->create($request->all());

        return redirect()->route('customers.orders.index2')->with('success','You have successfully requested for a pickup');

    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if(!$customer = $request->get('customer')) {
            $order = order::findOrFail($id);
        } else {
            $order = $customer->customer_orders()->findOrFail($id);
        }
        return view('user.show-order', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Order $order)
    {
        return view('user.order-edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Order $order
     * @return Order
     */
    public function update(Request $request, Order $order)
    {
        if(!$order->isPending()) return back()->with('error', 'Only pending order can be updated.');

        $this->validate($request,[
            'pickup_address' => 'required',
            'pickup_lga_id' => 'required|exists:lgas,id',
            'drop_off_address' => 'required',
            'drop_off_lga_id' => 'required|exists:lgas,id',
            'description' => 'required',
            'recipient_name' => 'required',
            'recipient_phone_number' => 'required',
        ]);
        $order->update($request->all());

        return redirect('/customers/orders')->with('success','You have successfully updated your pickup');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cancel(Order $order)
    {
        if(!$order->isPending()) return back()->with('error', "This order cannot be cancelled because it's not pending");

        $order->status = 'CANCELLED';
        $order->save();
        return back()->with('success', "You've successfully cancelled your order.");
    }

    public function index3($id)
    {
        $orders = User::customers()->findOrFail($id)->orders()->paginate(getPaginateSize());
        return view('admin.orders.index', compact("orders"));
    }
}
