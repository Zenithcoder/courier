<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Order;
use App\Lga;
use App\OrderActivity;
class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param Order $order
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Order $order)
    {
        $orders=  Order::whereTrackingNumber($request->get('tracking_number'))->first();
        return view('user.orders_tracking', compact('$orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $lgas = Lga::all();
        return view('riders.activity.create', compact('id', 'lgas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'description' => 'required',
            'current_lga_id' => 'required|exists:lgas,id',
            'current_location' => 'required',
            'next_lga_id' => 'required|exists:lgas,id',
            'next_location' => 'required',
            'expected_delivery_date' => 'required'
        ]);

        OrderActivity::create($request->except('_token'));

        return back()->with('success','You have successfully added an Activity');
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
        $lgas = Lga::all();
        $activity = OrderActivity::find($id);

        return view('riders.activity.edit', compact('activity','lgas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderActivity $id)
    {
        $id->update($request->all());
        return back()->with('success','You have successfully updated an Activity');
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
