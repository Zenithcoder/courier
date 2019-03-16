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
                    <div class="grid-row">
                        <div class="grid grid-responsive grid-5">
                            {!! Form::open(["method" => "GET"]) !!}
                                <div class="form-row">
                                    <div class="label">Search:<br><small>(Tracking Number)</small></div>
                                    <div class="input">
                                        <i class="fa fa-search"></i><input type="text" class="icon" name="q" placeholder="Tracking Number">
                                        <button class="btn btn-success btn-small"><i class="fa fa-search"></i> Search</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                        <div class="grid grid-responsive grid-7">

                            <div class="grid grid-responsive grid-2">
                                <button class="btn btn-small btn-info" id="filter"><i class="fa fa-filter"></i> Filter <i id="filterIcon" class="fa fa-chevron-down"></i></button>
                            </div>

                            <div id="filterForm" class="grid grid-responsive grid-10" style="display: none;">
                                {!! Form::open(["method" => "GET"]) !!}
                                    <div class="grid grid-responsive grid-12">
                                        <div class="form-row ">
                                            <div class="label">Order Status:</div>
                                            <div class="input">
                                                {!! Form::checkbox('status[]', 'PENDING', false, ["id" => "statusPending"]); !!}{!! Form::label('statusPending', 'Pending') !!}
                                                {!! Form::checkbox('status[]', 'EN_ROUTE', false, ["id" => "statusEnRoute"]); !!}{!! Form::label('statusEnRoute', 'En-Route') !!}
                                                {!! Form::checkbox('status[]', 'DELIVERED', false, ["id" => "statusDelivered"]); !!}{!! Form::label('statusDelivered', 'Delivered') !!}
                                                {!! Form::checkbox('status[]', 'CANCELLED', false, ["id" => "statusCancelled"]); !!}{!! Form::label('statusCancelled', 'Cancelled') !!}
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="label">Payment Status:</div>
                                            <div class="input">
                                                {!! Form::checkbox('payment_status[]', 'PENDING', false, ["id" => "paymentStatusPending"]); !!}{!! Form::label('paymentStatusPending', 'Pending') !!}
                                                {!! Form::checkbox('payment_status[]', 'PAID', false, ["id" => "paymentStatusPaid"]); !!}{!! Form::label('paymentStatusPaid', 'Paid') !!}
                                                {!! Form::checkbox('payment_status[]', 'FAILED', false, ["id" => "paymentStatusFailed"]); !!}{!! Form::label('paymentStatusFailed', 'Failed') !!}
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="label">Assigned Status:</div>
                                            <div class="input">
                                                {!! Form::checkbox('assigned_status[]', 'ASSIGNED', false, ["id" => "assignedStatusAssigned"]); !!}{!! Form::label('assignedStatusAssigned', 'Assigned') !!}
                                                {!! Form::checkbox('assigned_status[]', 'NOT_ASSIGNED', false, ["id" => "assignedStatusNotAssigned"]); !!}{!! Form::label('assignedStatusNotAssigned', 'Not Assigned') !!}
                                            </div>
                                        </div>
                                        <div class="form-row ">

                                            <div class="input">
                                                <button class="btn btn-mini btn-success" id="filter"><i class="fa fa-search"></i> Go</button>

                                            </div>
                                        </div>
                                    </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

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
                                <td><label class="status status-error">{{$order->status}}</label></td>
                                <td>@if($order->rider)<a href="{{route("users.riders.show", $order->rider->id)}}" title="{{$order->rider->phone_number}}">{{$order->rider->name}}</a>@endif</td>
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
                {{$orders->appends(request()->all())->links()}}
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- End -->
        <div class="clearfix"></div>

    </div>

@endsection

@section("custom_script")
    <script>
        $(document).ready(function() {
            let toggleState = true;
            $('#filter').click(function () {

                if(toggleState){
                    $('#filterForm').slideDown();
                    toggleState = false;
                    $('#filterIcon').removeClass("fa-chevron-down").addClass("fa-chevron-up")
                } else {
                    $('#filterForm').slideUp();
                    toggleState = true;
                    $('#filterIcon').removeClass("fa-chevron-up").addClass("fa-chevron-down")
                }
            })
        });
    </script>
@endsection