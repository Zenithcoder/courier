<ul class="navigation">
    <li class="separator"><div></div><div></div><div></div></li>
    <li><a href="#"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
    <li class="sub">
        <a href="#" @yield("user_active")><i class="fa fa-users"></i><span>Users</span></a>
        <ul class="navigation-sub">
            <li><a href="{{route("users.administrators.index")}}" @yield("user_admin_active")><i class="fa fa-users"></i><span>Administrator</span></a></li>
            <li><a href="{{route("users.riders.index")}}" @yield("user_rider_active")><i class="fa fa-taxi"></i><span>Rider</span></a></li>
            <li><a href="{{route("users.customers.index")}}" @yield("user_customer_active")><i class="fa fa-users"></i><span>Customer</span></a></li>
        </ul>
    </li>
    <li><a href="{{route("orders.index")}}" @yield("order_active")><i class="fa fa-shopping-cart"></i><span>Orders</span></a></li>
    <li class="separator"><div></div><div></div><div></div></li>
    <li><a href=""><i class="fa fa-user"></i><span>My Profile</span></a></li>
    <li class="separator"><div></div><div></div><div></div></li>
    <li><a href=""><i class="fa fa-cog"></i><span>Settings</span></a></li>
    <li><a href="{{route("logout")}}"><i class="fa fa-lock"></i><span>Logout</span></a></li>


</ul>