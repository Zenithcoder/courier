@extends('layouts.frontend')

@section('title')
    DashBoard
@endsection

@section('content')

    <!-- order form -->
    <section class="pt-80 quote-wrap">
        <div class="theme-container container ">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="/homecss/img/block/order-pickup.jpg" alt="" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s" />
                </div>
                <div class="col-md-6">
                    <div class="pad-10"></div>
                    <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" >Request Pickup </h2>
                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">By filling this form, you agree to the terms of use of the GL Dynamics Logistic company.</p>
                    Within 1 hours after placing a pickup request we'd contact you by phone.
                    You can always change your Phone number anytime in settings.

                    <div class="calculate-form">
                        <form class="form-horizontal" method="POST" action="{{ route('customers.orders.store') }}">
                            {{ csrf_field() }}
                           @include ('user.form-master')
                        </form>
                    </div>
                    <div class="pt-80 hidden-lg"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- order form ends -->

@endsection