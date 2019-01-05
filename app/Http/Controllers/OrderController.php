<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use App\User;
use App\Role;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {

        $orders = $user->order;
        if (Auth::user()->role_id != 3) {
            return view('/user.pickupform', compact('order'));
        }
        return view('/admin.orders.index')->with('orders', $orders);
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
    public function store(Request $request, User $user ){
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

        $riders = new Rider;
        $riders->rider_id = $request->rider_id;
        $riders->order_id = $order->id;
        $riders->save();

        return redirect('/dashboard')->with('success','You have successfully requested for a pickup');

    }  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $orders = Order::all();
        return view('/admin.orders.index')->with('orders', $orders);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function assign()
    {
        $roles = Role::all();//
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
