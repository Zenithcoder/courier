@extends('layouts.frontend')

@section('title')
  Show Order
@endsection

@section('content')
    <section class="pad-50 about-wrap">
        <span class="bg-text"> About </span>
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us pt-10">
                        <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                            Below is the details of your unprocessed order, you might wish to edit or delete before our courier Perssonel arrives. <br>
                            <strong>Please note that after now, your order has been picked up, you wont be able edit or delete.</strong>
                        </p>
                        <ul class="feature">
                            <li>
                                <img alt="" src="assets/img/icons/icon-2.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                    <h2 class="title-1">Recipient Name </h2>
                                    <p>{{$order->recipient_name}}</p>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="assets/img/icons/icon-2.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                    <h2 class="title-1">Recipient Phone </h2>
                                    <p>{{$order->recipient_phone_number}}</p>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="assets/img/icons/icon-2.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                    <h2 class="title-1">Pick Up Address </h2>
                                    <p>{{$order->pickup_address}}</p>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="assets/img/icons/icon-3.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                    <h2 class="title-1">Drop Off address</h2>
                                    <p>{{$order->drop_off_address}}</p>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="assets/img/icons/icon-4.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                    <h2 class="title-1">Status </h2>
                                    <p>Your Current Pick up request Status is {{$order->status}}</p>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="assets/img/icons/icon-4.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                    <h2 class="title-1">Item Decription </h2>
                                    <p>{{$order->description}}</p>
                                </div>
                            </li>
                        </ul>
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                            <div class="col-sm-9 col-xs-12 pull-right">
                                <button name="submit" id="submit_btn" class="btn btn-primary"> Edit</button>
                                <button name="submit" id="submit_btn" class="btn btn-danger"> Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 text-center">
                    <img alt="" src="/homecss/img/block/pickup-man.jpg" class="effect animated fadeInRight" />
                </div>
            </div>
        </div>
    </section>
@endsection


