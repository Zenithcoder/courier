 @extends('layouts.frontend')

@section('title')
Tracking
@endsection

@section('content')
<article>
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">
                    <div class="theme-container container ">
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> ID: <strong>{{$order->tracking_number}}</strong> </h2>
                                    <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Hello {{auth::user()->name}}</a></li>
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
                                <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                                <div class="row">
                                    <form class="" method="get" action="/order/tracker">
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter your product ID" required=""  name='tracking_number' class="form-control box-shadow">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5">
                                            <div class="form-group">
                                                <button class="btn-1">track your product</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- tracking status -->
                        <div class="progress-wrap">
                            <div class="progress-status">
                                <span class="border-left"></span>
                                <span class="border-right"></span>
                                <span class="dot dot-left wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                                <span class="themeclr-border wow fadeIn" data-wow-offset="50" data-wow-delay=".50s">  <span class="dot dot-center theme-clr-bg"></span> </span>
                                <span class="dot dot-right wow fadeIn" data-wow-offset="50" data-wow-delay=".60s"></span>
                            </div>
                            <div class="row progress-content upper-text">
                                <div class="col-md-3 col-xs-8 col-sm-2">
                                    <p class="fs-12 no-margin"> FROM </p>
                                    <h2 class="title-1 no-margin"></h2>
                                </div>
                                <div class="col-md-2 col-xs-8 col-sm-3">
                                    <p class="fs-12 no-margin"> [ <b class="black-clr">6 DAYS </b> ] </p>
                                </div>
                                <div class="col-md-4 col-xs-8 col-sm-4 text-center">
                                    <p class="fs-12 no-margin"> currently in </p>
                                    <h2 class="title-1 no-margin">singapore</h2>
                                </div>
                                <div class="col-md-1 col-xs-8 col-sm-1 no-pad">
                                    <p class="fs-12 no-margin"> [ <b class="black-clr">2 DAYS </b> ] </p>
                                </div>
                                <div class="col-md-2 col-xs-8 col-sm-2 text-right">
                                    <p class="fs-12 no-margin"> to </p>
                                    <h2 class="title-1 no-margin">dhaka</h2>
                                </div>
                            </div>
                        </div>
                        <!-- tracking status -->
                        <!-- order hostory history -->
                        <div class="row">
                            <table class="table table-striped">
                                <thead class="thead-light">
                                  <tr>
                                    <th class="col-lg-3">Date/Time </th>
                                    <th class="col-lg-6">Activity</th>
                                    <th class="col-lg-3">location</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <th scope="row"><h4>Pickup / Delivery History </h4></th>.
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  @foreach ($order->order_activities  as $key=>$dorder)
                                  <tr>
                                    <th scope="row"> {{$order->created_at->diffForHumans()}}</th>
                                    <td>{{$dorder->description}}</td>
                                    <td>{{$dorder->current_location}}</td>
                                  </tr>
                                    @endforeach
                                  <hr>
                                </tbody>
                            </table>
                        </div>
                       <!-- order hostory history end -->

                    </div>
                </section>
                <!-- /.Tracking -->

            </article>

            @endsection