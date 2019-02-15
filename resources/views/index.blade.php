@extends('layouts.frontend')

@section('title')
Gl-dynamic - home
@endsection

@section('content')
<article>
                <!-- Banner -->
                <section class="banner mask-overlay pad-120 white-clr">
                    <div class="container theme-container rel-div">
                        <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <li><a href="#">Fast</a></li>
                            <li><a href="#">Secured</a></li>
                            <li><a href="#">Worldwide</a></li>
                        </ul>
                        <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            WE CAN BE   <br> <span class="theme-clr"> ANYTHING </span>  <span class="theme-clr">  </span> YOU WANT US TO BE
                        </h2>
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
                                <h2 class="title-1"> Track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
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
                                    <p class="fs-16" data-wow-offset="50" data-wow-delay=".25s">
                                        Gl-Dynamic logistics is a global service company that is specialized in forwarding your Shipments from all destination,
                                        our goal is to provide quality service with high speed to our highly esteemed customers while
                                        ensuring the safety of their shipment. We have put a lot in place to ensure our
                                        customers needs are met and questions and complaints are answered with our 24 hours
                                        live Customer support. Some Reasons why our clients choose us includes
                                    </p>
                                    <ul class="feature">
                                        <li>
                                            <img alt="" src="/homecss/img/icons/icon-2.png" class="" data-wow-offset="50" data-wow-delay=".20s" />
                                            <div class="feature-content" data-wow-offset="50" data-wow-delay=".30s">
                                                <h2 class="title-1">Speed</h2>
                                                <p>
                                                    We ensure that every item arrives at it’s destination at the shortest time possible
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img alt="" src="/homecss/img/icons/icon-3.png" class="" data-wow-offset="50" data-wow-delay=".20s" />
                                            <div class="feature-content" data-wow-offset="50" data-wow-delay=".30s">
                                                <h2 class="title-1">Safety</h2>
                                                <p>
                                                    We have put a lot in place to ensure all shipments and parcels are
                                                    safe, all our staff are security and safety inclined to ensure
                                                    every shipment arrives their expected drop-off location.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img alt="" src="/homecss/img/icons/icon-4.png" class="" data-wow-offset="50" data-wow-delay=".20s" />
                                            <div class="feature-content" data-wow-offset="50" data-wow-delay=".30s">
                                                <h2 class="title-1">Service</h2>
                                                <p>
                                                    We have a 24/7 live customer support,
                                                    we are always ready to assist our esteemed customers
                                                </p>
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
                        <div class="steps">
                            <div class="steps__col">
                                <div class="font-2 fs-50" data-wow-offset="50" data-wow-delay=".20s"> 1. </div>
                                <div class="steps__content" data-wow-offset="50" data-wow-delay=".25s">
                                    <h2 class="title-3">Request Pickup</h2>
                                    <p>You need to have an account to request a pickup</p>
                                </div>
                            </div>
                            <div class="steps__col">
                                <div class="font-2 fs-50" data-wow-offset="50" data-wow-delay=".20s"> 2. </div>
                                <div class="steps__content" data-wow-offset="50" data-wow-delay=".25s">
                                    <h2 class="title-3">Track Parcel </h2>
                                    <p>Know the status of your parcel by tracking it with the right tracking number</p>
                                </div>
                            </div>
                            <div class="steps__col">
                                <div class="font-2 fs-50" data-wow-offset="50" data-wow-delay=".20s"> 3. </div>
                                <div class="steps__content" data-wow-offset="50" data-wow-delay=".25s">
                                    <h2 class="title-3">Deliver</h2>
                                    <p>Your delivery status changes to delivered when the item gets to the drop off location</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Steps -->

                <!-- Product Delivery -->
                <section class="prod-delivery pad-120">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <div class="pt-120 rel-div">
                                    <div class="pb-50 hidden-xs"></div>
                                    <div class="prod-delivery__content">
                                        <h2 class="section-title" data-wow-offset="50" data-wow-delay=".20s"> Get the <span class="theme-clr"> fastest </span> product delivery </h2>
                                        <p class="fs-16" data-wow-offset="50" data-wow-delay=".25s">
                                            At Gl-Dynamic we ensure your shipments gets delivered in time and
                                            in good condition. We are passionate about quality services to our customer,
                                            that's why we are Nigerians fastest Logistics Company based in Abuja.
                                        </p>
                                    </div>
                                    <div class="pb-120 hidden-xs"></div>
                                </div>
                                <div class="delivery-img pt-10">
                                    <img alt="" src="/homecss/img/block/delivery1.jpg" class="" data-wow-offset="50" data-wow-delay=".20s">
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
                <section class="contact-wrap">
                    <div class="contact-overlay"></div>
                    <span class="bg-text wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Contact </span>
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-6 col-sm-8">
                                <div class="title-wrap">
                                    <h2 class="section-title" data-wow-offset="50" data-wow-delay=".20s">Contact us</h2>
                                    <p class="" data-wow-offset="50" data-wow-delay=".20s" >Get in touch with us easily</p>
                                </div>
                                <ul class="contact-detail title-2">
                                    <li class="" data-wow-offset="50" data-wow-delay=".20s">
                                        <span>Abuja:</span> <p class="gray-clr"> +234 81-4251-9325 <br/> +234 70-6706-6642 </p>
                                    </li>
                                    <li class="" data-wow-offset="50" data-wow-delay=".30s">
                                        <span>Email address:</span> <p class="gray-clr"> info@gld.ng <br/> logistics@gld.ng </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Contact us -->
            </article>

@endsection