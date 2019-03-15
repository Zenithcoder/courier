<ul class="navigation">
    <li class="separator"><div></div><div></div><div></div></li>
    <li><a href="dashboard.html"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
    <li class="sub">
        <a href="#" @yield("users_active")><i class="fa fa-users"></i><span>Users</span></a>
        <ul class="navigation-sub">
            <li><a href="" @yield("staff_active")><i class="fa fa-users"></i><span>Staff</span></a></li>
            <li><a href="{{route("users.riders.index")}}" @yield("riders_active")><i class="fa fa-taxi"></i><span>Riders</span></a></li>
            <li><a href="{{route("users.customers.index")}}" @yield("customers_active")><i class="fa fa-users"></i><span>Customers</span></a></li>
        </ul>
    </li>
    <li class="separator"><div></div><div></div><div></div></li>
    <li><a href="statistics.html"><i class="fa fa-bar-chart-o"></i><span>Statistics</span></a></li>
    <li class="separator"><div></div><div></div><div></div></li>
    <li><a href="tracking.html"><i class="fa fa-map-marker"></i><span>Tracking</span></a></li>
    <li class="separator"><div></div><div></div><div></div></li>
    <li class="sub">
        <a href="#"><i class="fa fa-globe"></i><span>UI Elements</span></a>
        <ul class="navigation-sub">
            <li><a href="table.html"><i class="fa fa-table"></i><span>Table</span></a></li>
            <li><a href="button.html"><i class="fa fa-leaf"></i><span>Button</span></a></li>
            <li><a href="grid.html"><i class="fa fa-th"></i><span>Grid</span></a></li>
            <li><a href="tab.html"><i class="fa fa-laptop"></i><span>Tab / Accordion</span></a></li>
            <li><a href="chart.html"><i class="fa fa-bar-chart-o"></i><span>Chart</span></a></li>
            <li><a href="misc.html"><i class="fa fa-star-o"></i><span>Misc</span></a></li>
            <li><a href="dialog.html"><i class="fa fa-folder-o"></i><span>Dialog</span></a></li>
            <li><a href="notification.html"><i class="fa fa-info-circle"></i><span>Notification</span></a></li>
            <li><a href="icon.html"><i class="fa fa-flask"></i><span>Icon</span></a></li>
            <li><a href="typography.html"><i class="fa fa-font"></i><span>Typography</span></a></li>
        </ul>
    </li>
    <li class="separator"><div></div><div></div><div></div></li>
    <li class="sub">
        <a href="#"><i class="fa fa-file"></i><span>Pages</span></a>
        <ul class="navigation-sub">
            <li><a href="lock.html"><i class="fa fa-lock"></i><span>Lock Screen</span></a></li>
            <li><a href="login.html"><i class="fa fa-user"></i><span>Login</span></a></li>
        </ul>
    </li>
    <li class="separator"><div></div><div></div><div></div></li>
    <li><a href="form.html"><i class="fa fa-list-alt"></i><span>Form</span></a><span class="number-alert">4</span></li>
    <li class="separator"><div></div><div></div><div></div></li>
    <li><a href="gallery.html"><i class="fa fa-picture-o"></i><span>File Gallery</span></a></li>
    <li class="separator"><div></div><div></div><div></div></li>
    <li><a href="calendar.html"><i class="fa fa-calendar"></i><span>Calendar</span></a></li>
    <li class="separator"><div></div><div></div><div></div></li>
</ul>