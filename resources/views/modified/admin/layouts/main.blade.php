<!DOCTYPE html>
<html>
<head>
    <title>@yield("title") - {{config("app.name")}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0" />
    <!-- CSS Library -->
    <link rel="stylesheet" href="{{asset("modified/css/library/normalize.css")}}">
    <link rel="stylesheet" href="{{asset("modified/css/library/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("modified/css/library/jquery-ui-1.10.3.custom.min.css")}}">
    <!-- Theme -->
    <link rel="stylesheet" href="{{asset("modified/css/theme/default/layout.css")}}">
    <link rel="stylesheet" href="{{asset("modified/css/theme/default/core_colour.css")}}">
    <link rel="stylesheet" href="{{asset("modified/css/theme/default/colour.css")}}" class="theme-colour">
    <!-- Third Party Plugins -->
    <link rel="stylesheet" href="{{asset("modified/plugins/fullcalendar/fullcalendar.css")}}">
    <link rel="stylesheet" href="{{asset("modified/plugins/google-code-prettify/prettify.css")}}">
    <link rel="stylesheet" href="{{asset("modified/plugins/easy-pie-chart/jquery.easy-pie-chart.css")}}">
    <!-- Demo -->
    <link rel="stylesheet" href="{{asset("modified/css/demo.css")}}">
</head>
<body>
<!-- Theme Selector -->
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
                <img src="{{asset("modified/images/profile/profile.png")}}" alt="profile" />
            </div>
        </div>
        <!-- End -->
        <!-- Menu -->
        @include("modified.admin.layouts.partials.navigation")
        <!-- End -->
    </div>
    <!-- End -->
    <!-- Page Container -->
    <div id="main">
        @yield("content")
    </div>
    <!-- End -->
    <div class="clearfix"></div>
</div>
<!-- JavaScript Library -->
<script src="{{asset("modified/js/library/modernizr-2.6.2.min.js")}}"></script>
<script src="{{asset("modified/js/library/jquery-1.10.1.min.js")}}"></script>
<script src="{{asset("modified/js/library/jquery-ui-1.10.3.custom.min.js")}}"></script>
<!--[if lte IE 8]>
<script src="{{asset("modified/js/library/excanvas.min.js")}}"></script>
<![endif]-->
<!-- Main APP -->
<script src="{{asset("modified/js/app.js")}}"></script>
<!-- Demo -->
<script src="{{asset("modified/js/demo.js")}}"></script>
<!-- JavaScript Modules -->
<script src="{{asset("modified/js/module/module.min.js")}}"></script>
<!-- Third Party Plugins -->
{{--<script src="http://maps.googleapis.com/maps/api/js?sensor=true&key=GOOGLE_MAP_API_KEY"></script>--}}
<script src="{{asset("modified/plugins/flot/jquery.flot.min.js")}}"></script>
<script src="{{asset("modified/plugins/flot/jquery.flot.tooltip.min.js")}}"></script>
<script src="{{asset("modified/plugins/flot/jquery.flot.resize.min.js")}}"></script>
<script src="{{asset("modified/plugins/flot/jquery.flot.selection.min.js")}}"></script>
<script src="{{asset("modified/plugins/flot/jquery.flot.time.min.js")}}"></script>
<script src="{{asset("modified/plugins/flot/jquery.flot.pie.min.js")}}"></script>
<script src="{{asset("modified/plugins/flot/jquery.flot.crosshair.min.js")}}"></script>
<script src="{{asset("modified/plugins/fullcalendar/fullcalendar.min.js")}}"></script>
<script src="{{asset("modified/plugins/google-code-prettify/prettify.js")}}"></script>
<script src="{{asset("modified/plugins/ChartJS/Chart.min.js")}}"></script>
<script src="{{asset("modified/plugins/easy-pie-chart/jquery.easy-pie-chart.js")}}"></script>
<script>
    App.setOptions({
        spa: false
    });
</script>
</body>
</html>