<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="{{ asset('homecss/plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('homecss/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('homecss/plugins/font-awesome-4.6.1/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('homecss/plugins/font-elegant/elegant.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('homecss/plugins/owl.carousel.2/assets/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('homecss/css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('homecss/css/theme.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('homecss/css/customer-profile.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('homecss/css/custom.css') }}">

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
    </head>
    <body id="home">

        <!-- Main Wrapper -->        
        <main class="wrapper">

            <!-- Header -->
            <header class="header-main">

                <!-- Header Topbar -->
                <div class="top-bar font2-title1 white-clr">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-6 col-sm-5">
                                <ul class="list-items fs-10">
 
                                    <li><a href="#">Gl.Dynamic</a></li>
                                    <li class="active"><a href="#">...we can be anything you want us to be</a></li>
 
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-7 fs-12">
                                <p class="contact-num">
                                    <i class="fa fa-phone"></i>
                                    <span class="theme-clr"> +234-81-2519-4385 </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    @if (Auth::guest())
                        <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg">
                            <font color="black">Sign in </font>
                        </a>
                    @else
                    <a href="{{ route('logout') }}" class="sign-in fs-12 theme-clr-bg" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>     @endif
                </div>
                <!-- /.Header Topbar -->

                <!-- Header Logo & Navigation -->
                <nav class="menu-bar font2-title1">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-logo" href="#"> <img src="{{asset('homecss/img/logo/gld-logo.png')}}" style="height: 93px;" alt="logo" /> </a>
                            </div>
                            <div class="col-md-10 col-sm-10 fs-12">
                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav theme-menu">
 
                                        <li class="dropdown active">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Home </a>
                                        </li>
 
                                        <li> <a href="/about-us">About</a> </li>
                                        <li> <a href="/register"> Request Pickup </a> </li>
                                        <li> <a href="/tracking"> Tracking </a> </li>
                                        <li> <a href="/pricing"> Pricing </a> </li>
                                        <li> <a href="/contact"> Contact </a> </li>

                                        @if(!Auth::guest())
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >My Profile </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="/customers/orders">Dashboard</a></li>
                                                <li><a href="{{route('users.customers.myProfile')}}">My Profile </a></li>
                                                <li><a href="/customers/orders/create">Request Pickup</a></li>
                                                {{--<li><a href="{{ route('logout') }}">Logout</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                                            {{--{{ csrf_field() }}--}}
                                                        {{--</form></li>--}}

                                            </ul>
                                        </li>
                                        @endif
                                    <!--    <li><span class="search fa fa-search theme-clr transition"> </span></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- /.Header Logo & Navigation -->

            </header>
            <!-- /.Header -->

            <!-- Content Wrapper -->
            @yield('content')
            <!-- /.Content Wrapper -->

            <!-- Footer -->
            <footer>
 
                <div class="footer-main white-clr">
                    <div class="theme-container container">
                        <div class="col-md-3 col-sm-6 footer-widget">
                            <a href="#"> <img class="logo" alt="#" style="height: 93px;" src="{{asset('homecss/img/logo/logo-white.png')}}" />  </a>
                            <ul class="social-icons list-inline">
                                <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                    <a href="https://web.facebook.com/gl.dynamics.5" style="color:white;" class="fab fa-facebook"></a>
                                </li>
                                <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeIn;">
                                    <a href="#" style="color:white;" class="fab fa-twitter"></a>
                                </li>
                                <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                    <a href="https://www.instagram.com/gl_dynamic/" style="color:white;" class="fab fa-instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
 

                <div class="footer-bottom">
                    <div class="theme-container container">               
                        <div class="footer-bottom__details">
                            <div class="footer-bottom__copyright">
                                <p> &copy; Copyright {{ Date('Y') }}, All rights reserved </p>
                            </div>
                            <div class="footer-bottom__developer">
                                <p> Developed   by <a href="https://dukeweb.com.ng" class="main-clr"> Duke Web Tech</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /.Footer -->


        </main>
        <!-- / Main Wrapper -->

         <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>
                        
                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> sign in </h2>
                        <p> Sign in to <strong> GO </strong> for getting all details </p>                        

                        <div class="login-form clrbg-before">
                            <form class="login"  method="POST" action="{{ route('login') }}" >
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <input   type="password" class="form-control" name="password" required>
                                      @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> Sign in now </button>
                                </div>
                            </form>
                            <a href="#" class="gray-clr"> Forgot Passoword? </a>                            
                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a href="#" class="white-clr"> Don’t have an account? </a>  
                        <h2 class="title-2"> <a   href="{{ route('register') }}" class="green-clr under-line">Create a free account</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: Login --> 

                <!-- Popup: Signup -->
        <div class="modal fade signup-popup" id="signup-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> Sign Up </h2>
                        <p> Sign Up to <strong> Request For Pickup </strong></p>                        

                        <div class="login-form clrbg-before">
                            <form class="login" action="{{ route('register') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group"><input type="text" placeholder="Name" name="name" class="form-control"></div>
                                <div class="form-group"><input type="text" placeholder="Email" name="email" address" class="form-control"></div>
                                <div class="form-group"><input type="text" placeholder="Phone Number" name="phone_number" class="form-control"></div>
                                <div class="form-group"><input type="password" placeholder="Password" name="password" class="form-control"></div>
                                <div class="form-group"><input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control"></div>
                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> Sign Up now </button>
                                </div>
                            </form>
                                                
                        </div>                        
                    </div>
                    <div class="create-accnt">  
                        <a href="#" class="white-clr">Have an account? </a>  
                        <h2 class="title-2"> <a data-toggle="modal" data-dismiss="modal"  href="#login-popup" class="green-clr under-line">Login</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: Login --> 
        <!-- Search Popup -->
        <div class="search-popup">
            <div>
                <div class="popup-box-inner">
                    <form>
                        <input class="search-query" type="text" placeholder="Search and hit enter" />
                    </form>
                </div>
            </div>
            <a href="javascript:void(0)" class="close-search"><i class="fa fa-close"></i></a>
        </div>
        <!-- / Search Popup -->

        <!-- Main Jquery JS -->
        <script src="{{ asset('homecss//js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>        
        <!-- Bootstrap JS -->
        <script src="{{ asset('homecss//plugins/bootstrap-3.3.6/js/bootstrap.min.js')}}" type="text/javascript"></script>    
        <!-- Bootstrap Select JS -->
        <script src="{{ asset('homecss//plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>    
        <!-- OwlCarousel2 Slider JS -->
        <script src="{{ asset('homecss//plugins/owl.carousel.2/owl.carousel.min.js')}}" type="text/javascript"></script>   
        <!-- Sticky Header -->
        <script src="{{ asset('homecss//js/jquery.sticky.js')}}"></script>
        <!-- Wow JS -->
        <script src="{{ asset('homecss//plugins/WOW-master/dist/wow.min.js')}}" type="text/javascript"></script>
        <!-- Data binder -->
        <script src="{{ asset('homecss//plugins/data.binder.js/data.binder.js')}}" type="text/javascript"></script>

        <!-- Slider JS -->        


        <!-- Theme JS -->
        <script src="{{ asset('homecss//js/theme.js')}}" type="text/javascript"></script>

    </body>
</html>
