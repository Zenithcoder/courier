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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = auth()->user()->customer_orders()->with(['pickup_lga', 'pickup_lga.state', 'drop_off_lga', 'drop_off_lga.state'
        ])->paginate('5'); // returns the logged in user's (customer) orders
//
//        return $orders;
        return view('/user/dashboard', compact("orders"));
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
    public function store(Request $request,User $user ){
        $order= new Order;
        $this->validate($request,[
            /**
             *
            $table->increments('id');
            $table->text('pickup_address');
            $table->unsignedInteger('pickup_lga_id');
            $table->text('drop_off_address');
            $table->unsignedInteger('drop_off_lga_id');
            $table->double('amount');
            $table->enum('status', ['PENDING', 'EN_ROUTE', 'DELIVERED', 'CANCELLED',])->default('PENDING');
            $table->text('description');
            $table->double('weight')->nullable()->comment('weight in KG');
            $table->string('tracking_number')->unique()->nullable();
            $table->string('recipient_name', 80);
            $table->string('recipient_phone_number', 15);
            $table->enum('payment_status', ['PAID' , 'FAIL'])->nullable();
            $table->unsignedInteger('rider_id')->nullable()->comment('A rider is user with role - rider');
            $table->unsignedInteger('customer_id')->comment('A customer is user with role - customer');;
            $table->date("expected_delivery_date")->nullable();
             */
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
