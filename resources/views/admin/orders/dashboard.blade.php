 @extends('layouts.header')

@section('title')
Dashboard
@endsection

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>
                    <!-- Data Table -->
                     
                     <div class="clearfix"></div>
                     <div class="grid grid-responsive grid-3"></div>
                     <div class="grid grid-responsive grid-3" style="margin-bottom: 200px; font-size: 30px;">ADMIN DASHBOARD</div>
                     <div class="grid grid-responsive grid-3"></div>
                     <div class="clearfix"></div>
                    <div class="grid grid-responsive grid-3">
                        <div class="dashboard-widget">
                            <div class="title">
                                 
                                <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                                <button class="refresh" title="Refresh"><i class="fa fa-refresh"></i></button>
                            </div>
                            <div class="content" align="center">
                                <div class="grid grid-6 grid-border-right">
                                    <div> </div>
                                    <div class="lightcolour">Orders</div>
                                    <div class="size20">{{$order}}</div>
                                </div>
                                <div class="grid grid-6">
                                    <div> </div>
                                    <div class="lightcolour">Pending</div>
                                    <span class="size20">{{$pending}}</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-responsive grid-3">
                        <div class="dashboard-widget">
                            <div class="title">
                                 
                                <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                                <button class="refresh" title="Refresh"><i class="fa fa-refresh"></i></button>
                            </div>
                            <div class="content" align="center">
                                <div class="grid grid-6 grid-border-right">
                                    <div> </div>
                                    <div class="lightcolour">Users</div>
                                    <div class="size20">{{$user}}</div>
                                </div>
                                <div class="grid grid-6">
                                    <div> </div>
                                    <div class="lightcolour">Riders</div>
                                    <span class="size20">{{$rider}}</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-responsive grid-3">
                        <div class="dashboard-widget">
                            <div class="title">
                                
                                <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                                <button class="refresh" title="Refresh"><i class="fa fa-refresh"></i></button>
                            </div>
                            <div class="content" align="center">
                                <div class="grid grid-6 grid-border-right">
                                    <div> </div>
                                    <div class="lightcolour">Amount</div>
                                    <div class="size20">N{{$amount}}</div>
                                </div>
                                <div class="grid grid-6">
                                    <div> </div>
                                    <div class="lightcolour">Delivered</div>
                                    <span class="size20">{{$delivered}}</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            <!--        <div class="grid grid-responsive grid-3">
                        <div class="dashboard-widget">
                            <div class="title">
                                <i class="fa fa-google-plus"></i> Google+
                                <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                                <button class="refresh" title="Refresh"><i class="fa fa-refresh"></i></button>
                            </div>
                            <div class="content" align="center">
                                <div class="grid grid-6 grid-border-right">
                                    <div><i class="fa fa-google-plus-square size28 google-plus-colour"></i></div>
                                    <div class="lightcolour">CIRCLE</div>
                                    <div class="size20">21.5%</div>
                                </div>
                                <div class="grid grid-6">
                                    <div><i class="fa fa-google-plus-square size28 google-plus-colour"></i></div>
                                    <div class="lightcolour">MENTIONS</div>
                                    <span class="size20">9,731</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

@endsection