<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0" />
    <!-- Styles -->
   <!-- Latest compiled and minified CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="https://use.fontawesome.com/9712be8772.js"></script>
</head>
<body>

        <div id="portrait_mode_detector"></div>

        <div id="layout-container">
            <div class="page-title">
                <div class="menu-switch"><i class="fa fa-bars"></i></div>
                <i class="fa fa-list-alt"></i>
                <span>XYZ Couriers</span>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (null !==(auth::user()))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >
                                <button class="btn btn-info">{{Auth::user()->name}}</button>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        @include('layouts.sidebar')


        <div class="content-wrapper">
            @yield('content')
        </div>
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
</script>
</body>
</html>