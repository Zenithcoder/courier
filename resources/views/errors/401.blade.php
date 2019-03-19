@extends("modified.admin.layouts.main")

@section("content")
    <div class="page-title">
        <div class="menu-switch"><i class="fa fa-home"></i></div>
        <i class="fa fa-home"></i>
        <span>Dashboard</span>
    </div>

    <div class="margin-container">
        <div class="grid grid-responsive grid-12">
            <div class="dashboard-widget">
                <div class="title">
                    <i class="fa fa-user"></i> 401
                    <button class="toggle"><i class="fa fa-chevron-down"></i></button>
                </div>
                <div class="content">
                    <div class="size20">Access Denied</div>
                </div>
            </div>
        </div>
    </div>
@endsection