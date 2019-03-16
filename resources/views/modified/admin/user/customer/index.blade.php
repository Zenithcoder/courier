@extends("modified.admin.layouts.main")
@section("user_active") class="active" @endsection
@section("user_customer_active") class="active" @endsection
@section("title") Customers @endsection

@section("content")
    <div class="page-title">
        <div class="menu-switch"><i class="fa fa-users"></i></div>
        <i class="fa fa-users"></i>
        <span>Customers</span>
    </div>

    <div class="margin-container">
        <!-- Example -->
        <div class="dashboard-widget">
            <div class="title">
                <i class="fa fa-users"></i> Customers
                <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                <button class="setting" title="Setting"><i class="fa fa-cog"></i></button>
                <button class="refresh" title="Refresh"><i class="fa fa-refresh"></i></button>
            </div>
            <div class="content">
                <div class="data-table">
                    <table>
                        <tbody>
                        <tr>
                            <th>Name</th>
                            <th class="minor">Email</th>
                            <th>Mobile</th>
                            <th class="minor">Order Count</th>
                            <th>Joined At</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->name}}</td>
                            <td class="minor"><a href="mailto:{{$customer->email}}">{{$customer->email}}</a></td>
                            <td><i class="fa fa-mobile"></i> {{$customer->phone_number}}</td>
                            <td>{{$customer->customer_orders_count}}</td>
                            <td>{{$customer->created_at}}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-group btn-info btn-mini" title="View details" onclick='location.href = "{{route("users.customers.show", $customer->id)}}";'><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-group btn-success btn-mini" title="View customer's orders" onclick='location.href = "{{route("customers.orders.index", $customer->id)}}";'><i class="fa fa-shopping-cart"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="divider"></div>

                {{$customers->links()}}
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- End -->
        <div class="clearfix"></div>

    </div>

@endsection