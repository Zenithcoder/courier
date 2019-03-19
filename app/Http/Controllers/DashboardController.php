<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index() {

        $user = auth()->user();
        $summary = Cache::remember("dashboard_summary", 30, function() {
            // Total
            $orders_total = Order::count();
            $orders_total_pending = Order::pending()->count();
            $orders_total_en_route = Order::enRoute()->count();
            $orders_total_delivered = Order::delivered()->count();
            $orders_total_cancelled = Order::cancelled()->count();

            // Today
            $orders_today = Order::today()->count();
            $orders_today_pending = Order::pending()->today()->count();
            $orders_today_en_route = Order::enRoute()->today()->count();
            $orders_today_delivered = Order::delivered()->today(true)->count();
            $orders_today_cancelled = Order::cancelled()->today()->count();

            return [
                "orders" => [
                    "total" => [
                        "pending" => $orders_total_pending,
                        "en_route" => $orders_total_en_route,
                        "delivered" => $orders_total_delivered
                    ],
                    "today" => [
                        "pending" => $orders_today_pending,
                        "enRoute" => $orders_today_en_route,
                        "delivered" => $orders_today_delivered,
                    ]
                ],
                "users" => [
                    "riders" => User::riders()->count(),
                    "customers" => User::customers()->count(),
                ],
                "charts" => [
                    "pie" => [
                        "total" => [
                            "pending" => ($orders_total == 0) ? 0 : $orders_total_pending / $orders_total * 100,
                            "en_route" => ($orders_total == 0) ? 0 : $orders_total_en_route / $orders_total * 100,
                            "delivered" => ($orders_total == 0) ? 0 : $orders_total_delivered / $orders_total * 100,
                            "cancelled" => ($orders_total == 0) ? 0 : $orders_total_cancelled / $orders_total * 100,
                        ],
                        "today" => [
                            "pending" => ($orders_today == 0) ? 0 : $orders_today_pending / $orders_today * 100,
                            "en_route" => ($orders_today == 0) ? 0 : $orders_today_en_route / $orders_today * 100,
                            "delivered" => ($orders_today == 0) ? 0 : $orders_today_delivered / $orders_today * 100,
                            "cancelled" => ($orders_today == 0) ? 0 : $orders_today_cancelled / $orders_today * 100,
                        ],
                    ]
                ]
            ];
        });

        return view("modified.admin.dashboard", compact("summary", "user"));
    }
}
