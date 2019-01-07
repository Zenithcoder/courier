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
        $orders = User::consumer()->findOrFail($id)
            ->customer_orders()
            ->with(['pickup_lga', 'pickup_lga.state', 'drop_off_lga', 'drop_off_lga.state'])
            ->paginate(getPaginateSize());

        return view('user.order_tracking', compact("orders"));
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


    public function store(Request $request, User $user){
        $order=new Order;
        $this->validate($request,[
            'pickup_address' => 'required',
            'pickup_lga_id' => 'required|exists:lgas,id',
            'drop_off_address' => 'required',
            'drop_off_lga_id' => 'required|exists:lgas,id',
            'description' => 'required',
            'recipient_name' => 'required',
            'recipient_phone_number' => 'required',
            'customer_id'=>'auth()->user()->id',

        ]);
        $order->recipient_name=$request->recipient_name;
        $order->recipient_phone_number=$request->recipient_phone_number;
        $order->pickup_address=$request->pickup_address;
        $order->pickup_lga_id=$request->pickup_lga_id;
        $order->drop_off_address=$request->drop_off_address;
        $order->drop_off_lga_id=$request->drop_off_lga_id;
        $order->description=$request->description;
        $order->customer_id=auth()->user()->id;

        $order->save();
        return redirect()->route('customers.orders.index2')->with('success','YOu have successfully requested for a pickup');

    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user, $id)
    {
//        if(!$customer = $request->get('customer')) {
//            $orders = User::customer()->findOrFail($id)->customer_orders()->paginate(getPaginateSize());
//        } else {
//            $orders = $customer->customer_orders()->paginate(getPaginateSize());
//        }
        $orders = order::find($id);
//        return $orders;
        return view('user.show-order')->with('orders', $orders);
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
