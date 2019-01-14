 @extends('riders.layouts')

@section('title')
Riders DashBoard
@endsection

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>
                    <!-- Data Table -->
                    <div class="dashboard-widget">
                        <div class="title">
                            <i class="fa fa-users"></i>My DashBoard
                             
                        </div>
                        <div class="content">
                            <div class="dashboard-widget">
                        <div class="title">
                            <i class="fa fa-cloud"></i>Orders
                            <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                            <button class="setting" title="Setting"><i class="fa fa-cog"></i></button>
                            <button class="refresh" title="Refresh"><i class="fa fa-refresh"></i></button>
                        </div>
                        <div class="content">
                            <div class="sidebar overflow-none">
                                <div class="sidebar-widget">
                                    <div class="sidebar-widget-title">{{$delivered}}</div>
                                    <div class="sidebar-widget-subtitle">Delivered Orders </div>
                                    <div class="project-contribution" id="github-commit">
                                        <div class="main"></div>
                                        <div class="legend">
                                            <div class="left">low</div>
                                            <div class="level level1"></div>
                                            <div class="level level2"></div>
                                            <div class="level level3"></div>
                                            <div class="level level4"></div>
                                            <div class="level level5"></div>
                                            <div class="left">high</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget">
                                    <div class="sidebar-widget-title">{{$pending}}</div>
                                    <div class="sidebar-widget-subtitle">Pending Orders</div>
                                    <div class="project-contribution project-contribution-alt" id="bitbucket-commit">
                                        <div class="main"></div>
                                        <div class="legend">
                                            <div class="left">low</div>
                                            <div class="level level1"></div>
                                            <div class="level level2"></div>
                                            <div class="level level3"></div>
                                            <div class="level level4"></div>
                                            <div class="level level5"></div>
                                            <div class="left">high</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!--    <div class="sidebar-page">
                                <div id="dashboard-line-chart"></div>
                                <div class="margin-container">
                                    <div class="divider-line"></div>
                                </div>
                            </div> -->
                            <div class="clearfix"></div>
                        </div>
                    </div>

                        </div>
                 
                    <!-- End -->
                </div>
            </div>

@endsection