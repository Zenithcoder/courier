<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard() {

    }

    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles('manager');
        return view(‘some.view’);
    }

        public function authenticated(Request $request)
        {
        // Logic that determines where to send the user
        if($request->user()->hasRole(‘user’)){
        return redirect('/user/home');
        }
        if($request->user()->hasRole(‘admin’)){
        return redirect('/admin/home');
        }
    }

    */
}
