@extends('layouts.frontend')

@section('title')
    Home Page
@endsection

@section('content')
    <!-- Content Wrapper -->
    <article>
        <!-- Breadcrumb -->
        <section class="theme-breadcrumb pad-50">
            <div class="theme-container container ">
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="title-wrap">
                            <h2 class="section-title no-margin">Pricing & plans</h2>
                            <p class="fs-16 no-margin">Know about our pricing & plans</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb-menubar list-inline">
                            <li><a href="#" class="gray-clr">Home</a></li>
                            <li class="active">Pricing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Breadcrumb -->

        <!-- Pricing & Plans -->
        <section class="pricing-wrap pad-80">
            <div class="theme-container container">
                <div class="row pb-50">
                    <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                        <div class="pricing-box clrbg-before clrbg-after transition">
                            <div class="title-wrap text-center">
                                <h2 class="section-title fs-36">$50</h2>
                                <p>for single product</p>
                                <div class="btn-1">basic</div>
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
                    <div class="col-md-4 active white-clr wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
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
                    <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
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
        </section>
        <!-- /.Pricing & Plans -->
    </article>
    <!-- /.Content Wrapper -->

@endsection