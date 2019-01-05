<?php

namespace App\Http\Controllers\Customer;

use App\Order;
use App\User;
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
        $orders = User::consumer()->findOrFail($id)
            ->customer_orders()
            ->with(['pickup_lga', 'pickup_lga.state', 'drop_off_lga', 'drop_off_lga.state'])
            ->paginate(getPaginateSize());

        return view('admin.customers.order', compact("orders"));
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

        return view('dashboard', compact("orders"));
    }

    public function pickup()
    {
        return view('/user/pickupform');
    }

    /**
     * Show the form for creating a new resource.
     *
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

        Order::create($request->all());

        return redirect('/dashboard')->with('success','You have successfully requested for a pickup');

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
            $orders = User::customer()->findOrFail($id)->customer_orders()->paginate(getPaginateSize());
        } else {
            $orders = $customer->customer_orders()->paginate(getPaginateSize());
        }

        return view('admin.orders.index')->with('orders', $orders);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     * @return void
     */
    public function edit(Order $order)
    {

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
        return $order;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     * @return void
     */
    public function cancel(Order $order)
    {
//
    }
}
