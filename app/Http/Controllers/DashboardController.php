<?php

namespace App\Http\Controllers;

use App\Custom\Shared\Chart;
use App\Custom\Shared\DashboardSummary;
use App\Custom\Shared\OrderStatus;
use App\Custom\Shared\Order as SharedOrder;
use App\Custom\Shared\Pie;
use App\Custom\Shared\User as SharedUser;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Cache;


class DashboardController extends Controller
{
    public function index() {

        $user = auth()->user();

        $dashboardSummary = new DashboardSummary();
        if($user->hasRole("admin")) {
            $dashboardSummary = Cache::remember("dashboard:summary", 30, function() use (&$dashboardSummary){
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

                $dashboardSummary->setOrder(new SharedOrder(
                    new OrderStatus($orders_total_pending, $orders_total_en_route, $orders_total_delivered),
                    new OrderStatus($orders_today_pending, $orders_today_en_route, $orders_today_delivered)
                ));
                $dashboardSummary->setUser(new SharedUser(User::riders()->count(), User::customers()->count()));

                $dashboardSummary->setChart(new Chart(new Pie(
                    new OrderStatus(
                        ($orders_total == 0) ? 0 : $orders_total_pending / $orders_total * 100,
                        ($orders_total == 0) ? 0 : $orders_total_en_route / $orders_total * 100,
                        ($orders_total == 0) ? 0 : $orders_total_delivered / $orders_total * 100,
                        ($orders_total == 0) ? 0 : $orders_total_cancelled / $orders_total * 100
                    ),
                    new OrderStatus(
                        ($orders_today == 0) ? 0 : $orders_today_pending / $orders_today * 100,
                        ($orders_today == 0) ? 0 : $orders_today_en_route / $orders_today * 100,
                        ($orders_today == 0) ? 0 : $orders_today_delivered / $orders_today * 100,
                        ($orders_today == 0) ? 0 : $orders_today_cancelled / $orders_today * 100
                    )
                )));

                return $dashboardSummary;
            });
        } else {
            $dashboardSummary = Cache::remember("dashboard:summary:" . $user->id, 60, function() use ($user, &$dashboardSummary){
                // Total
                $orders_total = $user->rider_orders->count();
                $orders_total_pending = $user->rider_orders()->pending()->count();
                $orders_total_en_route = $user->rider_orders()->enRoute()->count();
                $orders_total_delivered = $user->rider_orders()->delivered()->count();
                $orders_total_cancelled = $user->rider_orders()->cancelled()->count();

                // Today
                $orders_today = $user->rider_orders()->today()->count();
                $orders_today_pending = $user->rider_orders()->pending()->today()->count();
                $orders_today_en_route = $user->rider_orders()->enRoute()->today()->count();
                $orders_today_delivered = $user->rider_orders()->delivered()->today(true)->count();
                $orders_today_cancelled = $user->rider_orders()->cancelled()->today()->count();

                $dashboardSummary->setOrder(new SharedOrder(
                    new OrderStatus($orders_total_pending, $orders_total_en_route, $orders_total_delivered),
                    new OrderStatus($orders_today_pending, $orders_today_en_route, $orders_today_delivered)
                ));

                $dashboardSummary->setChart(new Chart(new Pie(
                    new OrderStatus(
                        ($orders_total == 0) ? 0 : $orders_total_pending / $orders_total * 100,
                        ($orders_total == 0) ? 0 : $orders_total_en_route / $orders_total * 100,
                        ($orders_total == 0) ? 0 : $orders_total_delivered / $orders_total * 100,
                        ($orders_total == 0) ? 0 : $orders_total_cancelled / $orders_total * 100
                    ),
                    new OrderStatus(
                        ($orders_today == 0) ? 0 : $orders_today_pending / $orders_today * 100,
                        ($orders_today == 0) ? 0 : $orders_today_en_route / $orders_today * 100,
                        ($orders_today == 0) ? 0 : $orders_today_delivered / $orders_today * 100,
                        ($orders_today == 0) ? 0 : $orders_today_cancelled / $orders_today * 100
                    )
                )));

                if($user->hasRole("admin")) {
                    $dashboardSummary->setUser(new SharedUser(User::riders()->count(), User::customers()->count()));
                }

                return $dashboardSummary;
            });
        }

        return view("modified.admin.dashboard", compact("dashboardSummary", "user"));
    }
}
