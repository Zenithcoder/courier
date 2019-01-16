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
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::whereNull('rider_id')->orderBy('id', 'desc')->paginate(getPaginateSize());
       $riders =  DB::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')->where('role_user.role_id',2)->get();
     //  dd($riders);
        return view('admin.orders.all_orders',compact('orders', 'riders'));
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $orders = Order::whereNotNull('rider_id')->orderBy('id', 'desc')->paginate(getPaginateSize());
     //   dd($orders);
     //  $riders =  DB::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')->where('role_user.role_id',2)->get();
     //  dd($riders);
        return view('admin.orders.assigned_orders',compact('orders'));
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
       // dd(1);
        $order = Order::count();
        $pending =  Order::whereNull('rider_id')->count();
        $user = User::count();
        $rider =  DB::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')->where('role_user.role_id',2)->count();
        $delivered = Order::where('status','DELIVERED')->count();
        $amount = Order::where('status','DELIVERED')->sum('amount');

        return view('admin.orders.dashboard',compact('order','pending','user','rider','delivered','amount'));
    }

   
}
