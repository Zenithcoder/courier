<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0" />
        <!-- CSS Library -->
        
    <!-- Latest compiled and minified CSS -->
 <!--   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- CSS Library -->
    <link rel="stylesheet" href="{{ asset('dashcss/css/library/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('dashcss/css/library/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashcss/css/library/jquery-ui-1.10.3.custom.min.css')}}">
    <!-- Theme -->
    <link rel="stylesheet" href="{{ asset('dashcss/css/theme/default/layout.css')}}">
    <link rel="stylesheet" href="{{ asset('dashcss/css/theme/default/core_colour.css')}}">
    <link rel="stylesheet" href="{{ asset('dashcss/css/theme/default/colour.css')}}" class="theme-colour">
    <!-- Third Party Plugins -->
    <link rel="stylesheet" href="{{ asset('dashcss/plugins/fullcalendar/fullcalendar.css')}}">
    <link rel="stylesheet" href="{{ asset('dashcss/plugins/google-code-prettify/prettify.css')}}">
    <link rel="stylesheet" href="{{ asset('dashcss/plugins/easy-pie-chart/jquery.easy-pie-chart.css')}}">
    <!-- Demo -->
    <link rel="stylesheet" href="{{ asset('dashcss/css/demo.css')}}">
    </head>
    <body>
        <!-- Theme Selector 
        <div id="theme-selector">
            <div class="icon"><i class="fa fa-cogs"></i></div>
            <div class="theme" data-theme="colour"  style="background:#0B879E;"></div>
            <div class="theme" data-theme="colour1" style="background:#980053;"></div>
            <div class="theme" data-theme="colour2" style="background:#0F7C0F;"></div>
            <div class="theme" data-theme="colour3" style="background:#692E00;"></div>
            <div class="theme" data-theme="colour4" style="background:#CB252E;"></div>
            <div class="theme" data-theme="colour5" style="background:#015077;"></div>
            <div class="theme" data-theme="colour6" style="background:#CC4C25;"></div>
            <div class="theme" data-theme="colour7" style="background:#91A244;"></div>
            <div class="theme" data-theme="colour8" style="background:#444444;"></div>
        </div>
        <!-- End -->
        <!-- Portrait Detector -->
        <div id="portrait_mode_detector"></div>
        <!-- End -->
        <div id="layout-container">
            <!-- Menu -->
            <div id="nav">
                <!-- Profile -->
                <div class="profile">
                    <div class="avatar">
                        <img src="{{asset('dashcss/images/profile/profile.png')}}" alt="profile" />
                    </div>
                </div>
                <!-- End -->
                <!-- Menu -->
                <ul class="navigation">
                    <li class="separator"><div></div><div></div><div></div></li>
                    <li><a href="{{route('riders.orders.index3')}}"  ><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                    <li class="separator"><div></div><div></div><div></div></li>
                    <li><a href="{{route('riders.orders.index2')}}"><i class="fa fa-bar-chart-o"></i><span>My Orders</span></a></li>
                    <li class="separator"><div></div><div></div><div></div></li>
                    <li>
                     <a href="{{route('riders.orders.logout')}}" class="sign-in fs-12 theme-clr-bg"><i class="fa fa-map-marker"></i><span>Log Out</span></a>
                    </li>
               <!--     <li class="separator"><div></div><div></div><div></div></li>
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
                    <li class="separator"><div></div><div></div><div></div></li> -->
                </ul>
                <!-- End -->
            </div>
            <!-- End -->
            <!-- Page Container -->
            @yield('content')
            <!-- End -->
            <div class="clearfix"></div>
        </div>
        <!-- JavaScript Library -->

       <script src="{{asset('dashcss/js/library/modernizr-2.6.2.min.js')}}"></script>
<script src="{{asset('dashcss/js/library/jquery-1.10.1.min.js')}}"></script>
<script src="{{asset('dashcss/js/library/jquery-ui-1.10.3.custom.min.js')}}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--[if lte IE 8]>
<script src="/dashcss/js/library/excanvas.min.js"></script>
<![endif]-->
<!-- Main APP -->
<script src="{{asset('dashcss/js/app.js')}}"></script>
<!-- Demo -->
<script src="{{asset('dashcss/js/demo.js')}}"></script>
<!-- JavaScript Modules -->
<script src="{{asset('dashcss/js/module/module.min.js')}}"></script>
<!-- Third Party Plugins -->
<script src="{{asset('dashcss/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('dashcss/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('dashcss/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('dashcss/flot/jquery.flot.selection.min.js')}}"></script>
<script src="{{asset('dashcss/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{asset('dashcss/plugins/flot/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('dashcss/plugins/flot/jquery.flot.crosshair.min.js')}}"></script>
<script src="{{asset('dashcss/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('dashcss/plugins/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('dashcss/plugins/ChartJS/Chart.min.js')}}"></script>
<script src="{{asset('dashcss/plugins/easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
        <!-- Page Script -->
        <script>
            App.setOptions({
                spa: false
            });
            dashboardPage();
        </script>
         <script>
            $(document).ready(function() {

                 $('#notification-close').on('click', function(evt) {
                    App.notification.add('ORDER', 'Order Update Successfully', 80000);
                });

           /*     $('#notification-add').on('click', function(evt) {
                    App.notification.add('Hello World', 'You have got a new message from John Tomason. <a href="#">Check it out</a>.');
                });              

                $('#notification-remove-all').on('click', function(evt) {
                    App.notification.removeAll();
                });

                $('#notification-remove-first').on('click', function(evt) {
                    App.notification.removeFirst();
                });

                $('#notification-remove-last').on('click', function(evt) {
                    App.notification.removeLast();
                });

                $('#notification-remove-2').on('click', function(evt) {
                    App.notification.removeAt(1);
                }); */
            });

            prettyPrint();
        </script>

    </body>
</html>