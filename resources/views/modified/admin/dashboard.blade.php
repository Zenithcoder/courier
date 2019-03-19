@extends("modified.admin.layouts.main")
@section("title") Dashboard @endsection
@section("dashboard_active") class="active" @endsection

@section("content")
    <div class="page-title">
        <div class="menu-switch"><i class="fa fa-home"></i></div>
        <i class="fa fa-home"></i>
        <span>Dashboard</span>
    </div>


    <div class="margin-container">
        <div class="grid grid-responsive grid-6">
            <div class="dashboard-widget">
                <div class="title">
                    <i class="fa fa-user"></i> Welcome
                    <button class="toggle"><i class="fa fa-chevron-down"></i></button>
                </div>
                <div class="content">
                    <form class="wizard">

                            <div class="form-row">
                                <div class="form-row">
                                    <div class="label">Name:</div>
                                    <div class="input">
                                        <i class="fa fa-user"></i><input type="text" class="icon large" value="{{$user->name}}" disabled>
                                    </div>
                                </div>
                                <div class="label">Email Address:</div>
                                <div class="input">
                                    <i class="fa fa-envelope"></i><input type="email" class="icon large" placeholder="Email" value="{{$user->email}}" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Role:</div>
                                <div class="input">
                                    <i class="fa fa-lock"></i><input type="text" class="icon large" value="{{$user->roles()->first()->name}}" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Account Status:</div>
                                <div class="input">
                                    <i class="fa fa-lock"></i><input type="text" class="icon large" value="{{$user->is_status ? "Active" : "Inactive"}}" disabled>
                                </div>
                            </div>
                            <div></div>

                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="grid grid-responsive grid-6">
            <div class="grid grid-responsive grid-6">
                <div class="dashboard-widget">
                    <div class="title">
                        <i class="fa fa-shopping-cart"></i> Order
                        <button class="toggle"><i class="fa fa-chevron-down"></i></button>
                    </div>
                    <div class="content" align="center">
                        <div class="grid grid-6 grid-border-right">
                            <div><i class="fa fa-clock-o size28"></i></div>
                            <div class="lightcolour">Pending</div>
                            <div class="size20">{{$summary["orders"]["total"]["pending"]}}</div>
                        </div>
                        <div class="grid grid-6">
                            <div><i class="fa fa-money size28"></i></div>
                            <div class="lightcolour">En-Route</div>
                            <div class="size20">{{$summary["orders"]["total"]["en_route"]}}</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="grid grid-responsive grid-6">
                <div class="dashboard-widget">
                    <div class="title">
                        <i class="fa fa-shopping-cart"></i> Today's Order
                        <button class="toggle"><i class="fa fa-chevron-down"></i></button>
                    </div>
                    <div class="content" align="center">
                        <div class="grid grid-6 grid-border-right">
                            <div><i class="fa fa-clock-o size28"></i></div>
                            <div class="lightcolour">Pending</div>
                            <div class="size20">{{$summary["orders"]["today"]["pending"]}}</div>
                        </div>
                        <div class="grid grid-6">
                            <div><i class="fa fa-money size28"></i></div>
                            <div class="lightcolour">En-Route</div>
                            <div class="size20">{{$summary["orders"]["today"]["enRoute"]}}</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="grid grid-responsive grid-6">
                <div class="dashboard-widget">
                    <div class="title">
                        <i class="fa fa-shopping-cart"></i> Delivered Order
                        <button class="toggle"><i class="fa fa-chevron-down"></i></button>
                    </div>
                    <div class="content" align="center">
                        <div class="grid grid-6 grid-border-right">
                            <div><i class="fa fa-truck size28"></i></div>
                            <div class="lightcolour">Total Delivered</div>
                            <div class="size20">{{$summary["orders"]["total"]["delivered"]}}</div>
                        </div>
                        <div class="grid grid-6">
                            <div><i class="fa fa-truck size28"></i></div>
                            <div class="lightcolour">Delivered Today</div>
                            <div class="size20">{{$summary["orders"]["today"]["delivered"]}}</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="grid grid-responsive grid-6">
                <div class="dashboard-widget">
                    <div class="title">
                        <i class="fa fa-users"></i> Users
                        <button class="toggle"><i class="fa fa-chevron-down"></i></button>
                    </div>
                    <div class="content" align="center">
                        <div class="grid grid-6 grid-border-right">
                            <div><i class="fa fa-taxi size28"></i></div>
                            <div class="lightcolour">Riders</div>
                            <div class="size20">{{$summary["users"]["riders"]}}</div>
                        </div>
                        <div class="grid grid-6">
                            <div><i class="fa fa-users size28"></i></div>
                            <div class="lightcolour">Customers</div>
                            <div class="size20">{{$summary["users"]["customers"]}}</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="clearfix"></div>


        <div class="grid grid-responsive grid-6">
            <div class="dashboard-widget">
                <div class="title">
                    <i class="fa fa-shopping-cart"></i> Total Orders
                    <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                </div>
                <div class="content">
                    <div id="pie-chart-plot-order-total" class="chart-container"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="grid grid-responsive grid-6">
            <div class="dashboard-widget">
                <div class="title">
                    <i class="fa fa-shopping-cart"></i> Today's Orders
                    <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                </div>
                <div class="content">
                    <div id="pie-chart-plot-order-today" class="chart-container"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>


    </div>
@endsection

@section("custom_script")
    <script>
        var order = {
            total: [
                {color: '#f3a076', label: 'Pending', data: "{{$summary["charts"]["pie"]["total"]["pending"]}}"},
                {color: '#4484e1', label: 'En-Route', data: "{{$summary["charts"]["pie"]["total"]["en_route"]}}"},
                {color: '#1eb300', label: 'Delivered', data: "{{$summary["charts"]["pie"]["total"]["delivered"]}}"},
                {color: '#d5d5d5', label: 'Cancelled', data: "{{$summary["charts"]["pie"]["total"]["cancelled"]}}"}
            ],
            today: [
                {color: '#f3a076', label: 'Pending', data: "{{$summary["charts"]["pie"]["today"]["pending"]}}"},
                {color: '#4484e1', label: 'En-Route', data: "{{$summary["charts"]["pie"]["today"]["en_route"]}}"},
                {color: '#1eb300', label: 'Delivered', data: "{{$summary["charts"]["pie"]["today"]["delivered"]}}"},
                {color: '#d5d5d5', label: 'Cancelled', data: "{{$summary["charts"]["pie"]["today"]["cancelled"]}}"}
            ]
        };

        var pie_chart = {
            options: {
                series: {
                    pie: {
                        show: true,
                        tilt: 0.5,
                        label: {
                            show: true,
                            radius: 1,
                            formatter: function (label, series) {
                                return '<div style="text-align:center;padding:10px;color:' + font_colour[series.color] + ';">' + label + ': ' + Math.round(series.percent) + '%</div>';
                            },
                            background: {
                                opacity: 0.8
                            }
                        }
                    }
                },
                legend: {
                    show: false
                }
            }
        };

        $.plot($('#pie-chart-plot-order-total'), order.total, pie_chart.options);
        $.plot($('#pie-chart-plot-order-today'), order.today, pie_chart.options);
    </script>
@endsection