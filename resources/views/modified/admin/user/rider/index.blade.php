@extends("modified.admin.layouts.main")
@section("users_active") class="active" @endsection
@section("riders_active") class="active" @endsection
@section("title") Riders @endsection

@section("content")
    <div class="page-title">
        <div class="menu-switch"><i class="fa fa-users"></i></div>
        <i class="fa fa-users"></i>
        <span>Riders</span>
    </div>

    <div class="margin-container">
        <!-- Example -->
        <div class="dashboard-widget">
            <div class="title">
                <i class="fa fa-users"></i> Riders
                <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                <button class="setting" title="Setting"><i class="fa fa-cog"></i></button>
                <button class="refresh" title="Refresh"><i class="fa fa-refresh"></i></button>
            </div>
            <div class="content">
                <div class="data-table">
                    <div class="left">
                        <button class="btn btn-mini btn-info">New Rider</button>
                    </div>
                    <table>
                        <tbody>
                        <tr>
                            <th>Name</th>
                            <th class="minor">Email</th>
                            <th>Mobile</th>
                            <th class="minor">Status</th>
                            <th>Order Count</th>
                            <th>Ratings</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($riders as $rider)
                        <tr>
                            <td>{{$rider->name}}</td>
                            <td class="minor"><a href="mailto:{{$rider->email}}">{{$rider->email}}</a></td>
                            <td><i class="fa fa-mobile"></i> {{$rider->phone_number}}</td>
                            <td class="minor"><label class="status @if($rider->is_status == 1) status-success @else status-error @endif">{{$rider->status}}</label></td>
                            <td>{{$rider->rider_orders_count}}</td>
                            <td></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-group btn-block btn-mini" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-group btn-error btn-mini" title="Delete"><i class="fa fa-trash-o"></i></button>
                                    @if($rider->rider_orders_count > 0)
                                    <button class="btn btn-group btn-success btn-mini" title="View Orders" onclick='location.href = "{{route("riders.orders.index", $rider->id)}}";'><i class="fa fa-shopping-cart"></i></button>
                                    @endif
                                </div>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="divider"></div>
                {{$riders->links()}}
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- End -->
        <div class="clearfix"></div>

    </div>

@endsection