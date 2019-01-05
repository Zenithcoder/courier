<?php

namespace App\Http\Controllers\Rider;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

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
        $orders = User::rider()->findOrFail($id)->rider_orders()->paginate(getPaginateSize());

        return $orders;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $orders = auth()->user()->rider_orders()->paginate(getPaginateSize());

        return $orders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function assign(Order $order, Request $request) {
        $this->validate($request, [
            'rider_id' => [
                'required',
                Rule::exists('users')->where(function ($query) {
                    $query->whereHas('roles', function ($q) {
                        $q->whereName('rider');
                    });
                }),
            ]
        ]);

        if(!$order->isPending) return "Only pending order can be assigned to a rider";

        $order->rider_id = $request->get('rider_id');
        $order->status = 'EN_ROUTE';
        $order->save();

        return "Done";
    }
}
