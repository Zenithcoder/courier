@extends("modified.admin.layouts.main")
@section("order_active") class="active" @endsection
@section("title") Order @endsection

@section("content")
    <div class="page-title">
        <div class="menu-switch"><i class="fa fa-users"></i></div>
        <i class="fa fa-shopping-cart"></i>
        <span>Orders</span>
    </div>

    <div class="margin-container">
        <!-- Example -->
        <div class="dashboard-widget">
            <div class="title">
                <i class="fa fa-shopping-cart"></i> Orders
                <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
            </div>
            <div class="content">
                <div class="data-table">
                    @include("modified.admin.partials.order_filer_search")

                    <table>
                        <tbody>
                        <tr>
                            <th>Created At</th>
                            <th>Tracking Number</th>
                            <th>Pickup Address</th>
                            <th>Drop-off Address</th>
                            <th>Status</th>
                            <th>Assigned Rider</th>
                            <th>Amount</th>
                            <th>Payment Status</th>

                            <th></th>
                        </tr>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->created_at->diffForHumans()}}</td>
                                <td>{{$order->tracking_number}}</td>
                                <td>{{$order->pickup_address}}</td>
                                <td>{{$order->drop_off_address}}</td>
                                <td><label class="status {{$order->status_label}}">{{$order->status}}</label></td>
                                <td>@if($order->rider)<a href="{{route("users.riders.show", $order->rider->id)}}" title="{{$order->rider->phone_number}}">{{$order->rider->name}}</a>@endif</td>
                                <td><i class="fa fa-cas"></i> {{number_format($order->amount, 2)}}</td>
                                <td><label class="status {{$order->payment_status_label}}">{{$order->payment_status}}</label></td>

                                <td align="right" class="minor">
                                    <button class="btn btn-mini btn-info" title="View" onclick='location.href = "{{route("orders.show", $order->id)}}"'><i class="fa fa-eye"></i> View</button>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="divider"></div>
                {{$orders->appends(request()->all())->links()}}
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- End -->
        <div class="clearfix"></div>

    </div>

@endsection