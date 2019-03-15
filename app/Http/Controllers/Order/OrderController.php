<?php

namespace App\Http\Controllers\Order;

use App\Order;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function show(Order $order) {
        dd($order);
    }
}
