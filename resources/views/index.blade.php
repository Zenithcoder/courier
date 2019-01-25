@extends('layouts.frontend')

@section('title')
Home Page
@endsection

@section('content')
<article>
                <!-- Banner -->
                <section class="banner mask-overlay pad-120 white-clr">
                    <div class="container theme-container rel-div">
                        <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <li><a href="#">fast</a></li>
                            <li><a href="#">secured</a></li>
                            <li><a href="#">worldwide</a></li>
                        </ul>
                        <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> We Can Be   <br> <span class="theme-clr"> Anything </span>  <span class="theme-clr">  </span> You want Us to be  </h2>
                    </div>
                    <div class="pad-50 visible-lg"></div>
                </section>
                <!-- /.Banner -->

                <!-- Track Product -->
                <section>
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 track-prod clrbg-before" data-wow-offset="50" data-wow-delay=".20s">
                                <p>@if($message =Session::get('success'))
                                        <div class="alert alert-success">
                                <p>
                                    {{$message}}<i class="fas fa-check"></i>
                                </p>
                            </div>
                            @endif</p>
                                <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                                <div class="row">
                                   @include('/layouts.shipment-tracker')
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Track Product -->

                <!-- About Us -->
                <section class="pad-80 about-wrap clrbg-before">
                    <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">About Us  </span>
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-us">
                                    <h2 class="section-title pb-10" data-wow-offset="50" data-wow-delay=".20s">  Welcome to GL.Dynamic Logistics</h2>
                                    <p class="fs-16" data-wow-offset="50" data-wow-delay=".25s">.Welcome to the Nigerian leading Logistics company, we are known for speed, safety service and security</p>
                                    <ul class="feature">
                                        <li>
                                            <img alt="" src="/homecss/img/icons/icon-2.png" class="" data-wow-offset="50" data-wow-delay=".20s" />
                                            <div class="feature-content" data-wow-offset="50" data-wow-delay=".30s">
                                                <h2 class="title-1">Speed</h2>
                                                <p>Duis autem vel eum iriure dolor</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img alt="" src="/homecss/img/icons/icon-3.png" class="" data-wow-offset="50" data-wow-delay=".20s" />
                                            <div class="feature-content" data-wow-offset="50" data-wow-delay=".30s">
                                                <h2 class="title-1">Safety</h2>
                                                <p>Duis autem vel eum iriure dolor in hendrerit</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img alt="" src="/homecss/img/icons/icon-4.png" class="" data-wow-offset="50" data-wow-delay=".20s" />
                                            <div class="feature-content" data-wow-offset="50" data-wow-delay=".30s">
                                                <h2 class="title-1">Service</h2>
                                                <p>Eum iriure dolor in hendrerit in vulputa</p>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="pb-80 visible-lg"></div>
                                <img alt="" src="/img/block/about-img.png" class="" data-wow-offset="50" data-wow-delay=".20s" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.About Us -->



                <!-- Steps -->
                <section class="steps-wrap mask-overlay pad-80">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50" data-wow-offset="50" data-wow-delay=".20s"> 1. </div>
                                <div class="steps-content" data-wow-offset="50" data-wow-delay=".25s">
                                    <h2 class="title-3">Request Pickup</h2>
                                    <p class="gray-clr">Duis autem vel eum iriur <br> hendrerit in vulputate</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50" data-wow-offset="50" data-wow-delay=".20s"> 2. </div>
                                <div class="steps-content" data-wow-offset="50" data-wow-delay=".25s">
                                    <h2 class="title-3">Track Parcel </h2>
                                    <p class="gray-clr">Duis autem vel eum iriur <br> hendrerit in vulputate</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50" data-wow-offset="50" data-wow-delay=".20s"> 3. </div>
                                <div class="steps-content" data-wow-offset="50" data-wow-delay=".25s">
                                    <h2 class="title-3">Deliver</h2>
                                    <p class="gray-clr">Duis autem vel eum iriur <br> hendrerit in vulputate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="/homecss/img/block/van_1.jpg" alt="" /> </div>
                </section>
                <!-- /.Steps -->

                <!-- Product Delivery -->
                <section class="prod-delivery pad-120">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <div class="pt-120 rel-div">
                                    <div class="pb-50 hidden-xs"></div>
                                    <h2 class="section-title" data-wow-offset="50" data-wow-delay=".20s"> Get the <span class="theme-clr"> fastest </span> product delivery </h2>
                                    <p class="fs-16" data-wow-offset="50" data-wow-delay=".25s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <br>
                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam <br>
                                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci <br>
                                        tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                                    <div class="pb-120 hidden-xs"></div>
                                </div>
                                <div class="delivery-img pt-10">
                                    <img alt="" src="/homecss/img/block/delivery1.jpg" class="" data-wow-offset="50" data-wow-delay=".20s"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Product Delivery -->


 
                <!-- Pricing & Plans -->
            <!--    <section class="pricing-wrap pt-120">                
                    <div class="theme-container container">    
                        <span class="bg-text center wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Pricing </span>
                        <div class="title-wrap text-center  pb-50">
                            <h2 class="section-title" data-wow-offset="50" data-wow-delay=".20s">Pricing & plans</h2>
                            <p class="" data-wow-offset="50" data-wow-delay=".25s">See our pricing & plans to get best service</p>
                        </div>
                        <div class="row">
                            <div class="col-md-4" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">$50</h2>
                                        <p>for single product</p>
                                        <div class="btn-1">basic</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="gray-clr"> &LT; 3kg</span> </li>
                                            <li> Country: <span class="gray-clr">  all</span> </li>
                                            <li> duration: <span class="gray-clr">7-14 days</span> </li>
                                            <li> support: <span class="gray-clr">yes</span> </li>
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="#" class="title-1 theme-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                            <div class="col-md-4 active white-clr" data-wow-offset="50" data-wow-delay=".25s">
                                <div class="pricing-box theme-clr-bg">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">$250</h2>
                                        <p>for package product</p>
                                        <div class="btn-1 dark">Premium</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="white-clr">&LT; 3kg</span> </li>
                                            <li> Country: <span class="white-clr">  all</span> </li>
                                            <li> duration: <span class="white-clr">7-14 days</span> </li>
                                            <li> support: <span class="white-clr">yes</span> </li>
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="#" class="title-1 white-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>                                
                                </div>
                            </div>
                            <div class="col-md-4" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">$150</h2>
                                        <p>for multiple product</p>
                                        <div class="btn-1">standard</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="gray-clr">&LT; 3kg</span> </li>
                                            <li> Country: <span class="gray-clr">  all</span> </li>
                                            <li> duration: <span class="gray-clr">7-14 days</span> </li>
                                            <li> support: <span class="gray-clr">yes</span> </li>
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="#" class="title-1 theme-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                        </div>
                    </div>               
                </section> -->
                <!-- /.Pricing & Plans -->


                <!-- Contact us -->
                <section class="contact-wrap pad-120">
                    <span class="bg-text wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Contact </span>
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-6 col-sm-8">
                                <div class="title-wrap">
                                    <h2 class="section-title" data-wow-offset="50" data-wow-delay=".20s">contact us</h2>
                                    <p class="" data-wow-offset="50" data-wow-delay=".20s" >Get in touch with us easiky</p>
                                </div>
                                <ul class="contact-detail title-2">
                                    <li class="" data-wow-offset="50" data-wow-delay=".20s"> <span>uk numbers:</span> <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p> </li>
                                    <li class="" data-wow-offset="50" data-wow-delay=".25s"> <span>usa numbers:</span> <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p> </li>
                                    <li class="" data-wow-offset="50" data-wow-delay=".30s"> <span>Email address:</span> <p class="gray-clr"> support@go.com <br> info@go.com </p> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Contact us -->
            </article>

@endsection