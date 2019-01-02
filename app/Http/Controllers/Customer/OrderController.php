<?php

namespace App\Http\Controllers\Customer;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = auth()->user()->customer_orders()->with(['pickup_lga', 'pickup_lga.state', 'drop_off_lga', 'drop_off_lga.state'])->get(); // returns the logged in user's (customer) order
        return $orders;
        return view('user.pickup_form',compact('orders'));
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
    public function store(Request $request,User $user ){
        $order= new Order;
        $this->validate($request,[
            'pickup'=>'required',
            'dropoff'=>'required',
            'recipient_name'=>'required',
            'recipient_phone_num'=>'required',
            'lga_id'=>'required',
            'state_id'=>'required',
            'type'=>'required',

        ]);

        $order->pickup=$request->pickup;
        $order->dropoff=$request->dropoff;
        $order->recipient_name=$request->recipient_name;
        $order->recipient_phone_num=$request->recipient_phone_num;
        $order->lga_id=$request->lga_id;
        $order->state_id=$request->state_id;
        $order->type=$request->type;
        $order->user_id=auth()->user()->id;

        $order->save();
        return redirect('/dashboard')->with('success','YOu have successfully requested for a pickup');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//
    }
}
