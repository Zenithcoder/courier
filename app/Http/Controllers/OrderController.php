<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use App\User;
class OrderController extends Controller
{
    public function index()
    {
        return "hello";
    }
}
