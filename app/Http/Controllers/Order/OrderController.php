<?php

namespace App\Http\Controllers\Order;

use App\Order;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::with("rider")->filter()
            ->globalSearch(['tracking_number'])
            ->latest()->paginate(getPaginateSize());

        return view("modified.admin.order.index", compact("orders"));
    }

    public function show(Order $order) {
        dd($order);
    }
}
