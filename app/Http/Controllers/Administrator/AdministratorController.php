<?php

namespace App\Http\Controllers\Administrator;

//use Auth;
use App\User;
use Paginate;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Lga;
use App\Order;

class AdministratorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::notAssigned()->latest()->paginate(getPaginateSize());
        $riders = User::riders()->get();
        return view('admin.orders.all_orders',compact('orders', 'riders'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $orders = Order::isAssigned()->with('rider')->latest()->paginate(getPaginateSize());
        return view('admin.orders.assigned_orders',compact('orders'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $order = Order::count();
        $pending =  Order::notAssigned()->count();
        $user = User::count();
        $rider = User::riders()->count();
        $delivered = Order::delivered()->count();
        $amount = Order::delivered()->sum('amount');

        return view('admin.orders.dashboard',compact('order','pending','user','rider','delivered','amount'));
    }


}
