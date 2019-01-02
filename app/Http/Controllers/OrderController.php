<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use App\User;
class OrderController extends Controller
{
    public function index(User $user)
    {
        $order= $user->order;
       return view('/user.pickupform',compact('order'));
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
        $this->validate($request,[
            'pickup'=>'required',
            'dropoff'=>'required',
            'recipient_name'=>'required',
            'recipient_phone_num'=>'required',
            'lga_id'=>'required',
            'state_id'=>'required',
            'type'=>'required',
           
        ]);
        $order= new Order;
        $order->pickup=$request->pickup;
        $order->dropoff=$request->dropoff;
        $order->recipient_name=$request->recipient_name;
        $order->recipient_phone_num=$request->recipient_phone_num;
        $order->lga_id=$request->lga_id;
        $order->state_id=$request->state_id;
        $order->type=$request->type;
        $order->user_id=auth()->user()->id;
        
        $order->save();

        $rider = new Rider;
        $rider->rider_id = $request->rider_id;
        $rider->order_id = $order->id;
        $rider->save();

        return redirect('/dashboard')->with('success','You have successfully requested for a pickup');

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
    }
}
