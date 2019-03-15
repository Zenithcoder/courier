@extends("modified.admin.layouts.main")
@section("users_active") class="active" @endsection
@section("customers_active") class="active" @endsection
@section("title") Customer's Orders @endsection

@section("content")
    <div class="page-title">
        <div class="menu-switch"><i class="fa fa-users"></i></div>
        <i class="fa fa-users"></i>
        <span>{{$customer->name}} Orders </span>
    </div>

    <div class="margin-container">
        <!-- Example -->
        <div class="dashboard-widget">
            <div class="title">
                <i class="fa fa-users"></i> {{$customer->name}} Orders
                <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                <button class="setting" title="Setting"><i class="fa fa-cog"></i></button>
            </div>
            <div class="content">
                <div class="data-table">
                    <table>
                        <tbody>
                            <tr>
                                <th>Tracking Number</th>
                                <th>Description</th>
                                <th>Pickup Address</th>
                                <th>Drop-off Address</th>
                                <th class="minor">Status</th>
                                <th class="minor">Amount</th>
                                <th class="minor">Payment Status</th>
                                <th></th>
                            </tr>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->tracking_number}}</td>
                            <td>{{str_limit($order->description)}}</td>
                            <td>{{$order->pickup_address}}</td>
                            <td>{{$order->drop_off_address}}</td>
                            <td><label class="status status-inverse">{{$order->status}}</label></td>
                            <td><i class="fa fa-cas"></i> {{number_format($order->amount, 2)}}</td>
                            <td>{{$order->payment_status}}</td>
                            <td align="right" class="minor">
                                <button class="btn btn-mini btn-info" title="View" onclick='location.href = "{{route("orders.show", $order->id)}}"'><i class="fa fa-eye"></i> View</button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="divider"></div>

                {{$orders->links()}}
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- End -->
        <div class="clearfix"></div>

    </div>

@endsection