<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- CSS Library -->
    <link rel="stylesheet" href="/dashcss/css/library/normalize.css">
    <link rel="stylesheet" href="/dashcss/css/library/font-awesome.min.css">
    <link rel="stylesheet" href="/dashcss/css/library/jquery-ui-1.10.3.custom.min.css">
    <!-- Theme -->
    <link rel="stylesheet" href="/dashcss/css/theme/default/layout.css">
    <link rel="stylesheet" href="/dashcss/css/theme/default/core_colour.css">
    <link rel="stylesheet" href="/dashcss/css/theme/default/colour.css" class="theme-colour">
    <!-- Third Party Plugins -->
    <link rel="stylesheet" href="/dashcss/plugins/fullcalendar/fullcalendar.css">
    <link rel="stylesheet" href="/dashcss/plugins/google-code-prettify/prettify.css">
    <link rel="stylesheet" href="/dashcss/plugins/easy-pie-chart/jquery.easy-pie-chart.css">
    <!-- Demo -->
    <link rel="stylesheet" href="/dashcss/css/demo.css">
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
                <img src="dashcss/images/founder.svg" alt="profile" />
            </div>
        </div>
        <!-- End -->
        <!-- Menu -->
        <ul class="navigation">
            <li class="separator"><div></div><div></div><div></div></li>
            <li><a href="dashboard.html"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
            <li class="separator"><div></div><div></div><div></div></li>
            <li><a href="{{ route('users.create') }}"><i class="fa fa-bar-chart-o"></i><span>Create User</span></a></li>
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
            <li><a href="form.html" class="active"><i class="fa fa-list-alt"></i><span>Form</span></a><span class="number-alert">4</span></li>
            <li class="separator"><div></div><div></div><div></div></li>
            <li><a href="gallery.html"><i class="fa fa-picture-o"></i><span>File Gallery</span></a></li>
            <li class="separator"><div></div><div></div><div></div></li>
            <li><a href="calendar.html"><i class="fa fa-calendar"></i><span>Calendar</span></a></li>
            <li class="separator"><div></div><div></div><div></div></li>
        </ul>
        <!-- End -->
    </div>
    <!-- End -->
    <!-- Page Container -->
    <div id=">
        <div class="page-title">
            <div class="menu-switch"><i class="fa fa-bars"></i></div>
            <i class="fa fa-list-alt"></i>
            <span>Web Forms</span>
        </div>
        <div class="margin-container">
            <div class="dashboard-widget">
                <div class="title">
                    <i class="fa fa-user"></i> Wizard
                    <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                </div>
                <div class="content">
                    <form class="wizard">
                        <div class="form-row">
                            <div class="form-wizard-indicator-container">
                                <div class="form-wizard-indicator">
                                    <label><span>1</span></label>
                                    <span class="desc">Login Details</span>
                                </div>
                                <div class="form-wizard-indicator">
                                    <label><span>2</span></label>
                                    <span class="desc">Personal Information</span>
                                </div>
                                <div class="form-wizard-indicator">
                                    <label><span>3</span></label>
                                    <span class="desc">Payment Method</span>
                                </div>
                                <div class="form-wizard-indicator">
                                    <label><span>4</span></label>
                                    <span class="desc">Confirmation</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-wizard">
                            <div class="form-row">
                                <div class="label">Email Address:</div>
                                <div class="input">
                                    <i class="fa fa-envelope"></i><input type="email" class="icon large" placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Username:</div>
                                <div class="input">
                                    <i class="fa fa-user"></i><input type="text" class="icon large" placeholder="Username" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Password:</div>
                                <div class="input">
                                    <i class="fa fa-lock"></i><input type="password" class="icon large" placeholder="Password" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Confirm Password:</div>
                                <div class="input">
                                    <i class="fa fa-lock"></i><input type="password" class="icon large" placeholder="Confirm Password" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Dropdown</div>
                                <div class="input">
                                    <select class="large">
                                        <option>Dropdown option 1</option>
                                        <option>Dropdown option 2</option>
                                        <option>Dropdown option 3</option>
                                        <option>Dropdown option 4</option>
                                    </select>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="form-wizard">
                            <div class="form-row">
                                <div class="label">Phone:</div>
                                <div class="input">
                                    <i class="fa fa-phone"></i><input type="tel" class="icon large" placeholder="Phone" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Website:</div>
                                <div class="input">
                                    <i class="fa fa-globe"></i><input type="url" class="icon large" placeholder="Website" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Date of Birth:</div>
                                <div class="input"><i class="fa fa-calendar"></i><input type="date" class="icon large" /></div>
                            </div>
                            <div class="form-row">
                                <div class="label">Gender:</div>
                                <div class="input">
                                    <input type="radio" name="gender" id="gender-btn-m" /><label for="gender-btn-m">Male</label>
                                    <input type="radio" name="gender" id="gender-btn-f" /><label for="gender-btn-f">Female</label>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="form-wizard">
                            <div class="form-row">
                                <div class="label">Credit Card Type:</div>
                                <div class="input">
                                    <select>
                                        <option>Visa</option>
                                        <option>MasterCard</option>
                                        <option>AMEX</option>
                                        <option>Dinner Club</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Credit Card Number:</div>
                                <div class="input">
                                    <input type="text" class="mini creditcard" maxlength="4" />&nbsp;-&nbsp;
                                    <input type="text" class="mini creditcard" maxlength="4" />&nbsp;-&nbsp;
                                    <input type="text" class="mini creditcard" maxlength="4" />&nbsp;-&nbsp;
                                    <input type="text" class="mini creditcard" maxlength="4" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Expiry Date:</div>
                                <div class="input">
                                    <input type="text" class="mini" placeholder="mm" maxlength="2" />&nbsp;/&nbsp;
                                    <input type="text" class="mini" placeholder="yy" maxlength="2" />&nbsp;<small>(mm/yy)</small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">CVV:</div>
                                <div class="input">
                                    <i class="fa fa-credit-card"></i><input type="text" class="icon small" placeholder="CVV" />
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="form-wizard">
                            <div class="form-row">
                                <div class="label">Terms & Conditions:</div>
                                <div class="input">
                                            <textarea class="full" style="height:170px;" readonly="readonly">Terms & Conditions

1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.

2. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.

3. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.

4. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.

5. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.

6. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</textarea><br>
                                    <input type="checkbox" id="tnc" /><label for="tnc">I agree to the Terms & Conditions</label>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="form-button-bar">
                            <button class="btn btn-default btn-small form-wizard-previous"><i class="fa fa-arrow-circle-left"></i> Previous</button>&nbsp;
                            <button class="btn btn-success btn-small form-wizard-next"><i class="fa fa-arrow-circle-right"></i> Next</button>
                            <button class="btn btn-success btn-small form-wizard-submit form-submit-ajax"><i class="fa fa-external-link"></i> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <!-- End -->
    <div class="clearfix"></div>
</div>
<!-- JavaScript Library -->
<script src="/dashcss/js/library/modernizr-2.6.2.min.js"></script>
<script src="/dashcss/js/library/jquery-1.10.1.min.js"></script>
<script src="/dashcss/js/library/jquery-ui-1.10.3.custom.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--[if lte IE 8]>
<script src="/dashcss/js/library/excanvas.min.js"></script>
<![endif]-->
<!-- Main APP -->
<script src="/dashcss/js/app.js"></script>
<!-- Demo -->
<script src="/dashcss/js/demo.js"></script>
<!-- JavaScript Modules -->
<script src="/dashcss/js/module/module.min.js"></script>
<!-- Third Party Plugins -->
<script src="/dashcss/plugins/flot/jquery.flot.min.js"></script>
<script src="/dashcss/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="/dashcss/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="/dashcss/flot/jquery.flot.selection.min.js"></script>
<script src="/dashcss/plugins/flot/jquery.flot.time.min.js"></script>
<script src="/dashcss/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="/dashcss/plugins/flot/jquery.flot.crosshair.min.js"></script>
<script src="/dashcss/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="/dashcss/plugins/google-code-prettify/prettify.js"></script>
<script src="/dashcss/plugins/ChartJS/Chart.min.js"></script>
<script src="/dashcss/plugins/easy-pie-chart/jquery.easy-pie-chart.js"></script>
<!-- Page Script -->
<script>
    App.setOptions({
        spa: false
    });
</script>
</body>
</html>