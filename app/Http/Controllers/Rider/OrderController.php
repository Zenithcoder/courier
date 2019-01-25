<?php

namespace App\Http\Controllers\Rider;

use App\Order;
use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Auth;
use App\OrderActivity;
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
         $orders =  Order::where('rider_id',$id)->paginate(getPaginateSize());
      //  $orders = User::rider()->findOrFail($id)->rider_orders()->paginate(getPaginateSize());
        // dd($orders);
        return view('admin.orders.riders_orders', compact('orders'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $orders = auth()->user()->rider_orders()->paginate(getPaginateSize());

       //  dd($orders);
        //  return $orders;
        return view('riders.riders_orders', compact('orders'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index3()
    {
       $delivered = auth()->user()->rider_orders()->Delivered()->count();
        $pending = auth()->user()->rider_orders()->Pending()->count();
       
        return view('riders.index', compact('delivered','pending'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd(1);
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
    //   $sd=  OrderActivity::find(1)->current_lga;
        $activities = $order->order_activities;
       // dd($sd);
        return view('riders.show', compact('order','activities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {

        return view('riders.update_order', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Order $order
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }

    public function assign(Order $order, Request $request) {
       $this->validate($request, [
            'rider_id' => 'required'
        ]); 

        if(!$order->isPending()) return back()->with('success','Only pending order can be assigned to a rider');

        if(!$rider = User::riders()->find($request->get('rider_id')))
            return back()->with('success','Not a valid rider');

        $order->rider_id = $rider->id;
        $order->status = 'EN_ROUTE';
        $order->save();

        return back()->with('success','order assigned to a rider');
    }

     
    
     
}
