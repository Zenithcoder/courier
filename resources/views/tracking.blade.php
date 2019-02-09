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
                        <h2 class="section-title no-margin"> Product Tracking </h2>
                        <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="#" class="gray-clr">Home</a></li>
                        <li class="active">Track</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- Tracking -->
    <section class="pt-50 pb-120 tracking-wrap">
        <div class="theme-container container ">
            <div class="row pad-10">
                <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                    <h2 class="title-1"> Track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                    <div class="row">
                        @include('/layouts.shipment-tracker')                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- /.Tracking -->

</article>

<!-- /.Content Wrapper -->

@endsection
