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
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2"> Recipient Name</label></div>
                                <div class="col-sm-9"> <input type="text" placeholder="" class="form-control" name="recipient_name" required=""> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2"> Recipient Phone Number</label></div>
                                <div class="col-sm-9"> <input type="text" placeholder="" class="form-control" name="recipient_phone_number" required=""> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2">Pickup Address </label></div>
                                <div class="col-sm-9"> <input type="text" placeholder="" class="form-control" name="pickup_address" required=""> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2">Recipient Address </label></div>
                                <div class="col-sm-9"> <input type="text" placeholder="" class="form-control" name="drop_off_address" required=""> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2"> location: </label></div>
                                <div class="col-sm-9">
                                    <div class="col-sm-6 no-pad">
                                        <select class="selectpicker form-control" name="pickup_lga_id" data-live-search="true" data-width="100%"
                                                data-toggle="tooltip" title="Pickup LGA">
                                            @foreach($local as $key=>$lga)
                                                <option value="{{$lga->id}}">{{$lga->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-sm-6 no-pad">
                                        <select class="selectpicker form-control" name="drop_off_lga_id" data-live-search="true" data-width="100%"
                                                data-toggle="tooltip" title="Dropoff LGA">
                                            @foreach($local as $key=>$lga)
                                                <option value="{{$lga->id}}">{{$lga->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2">Item Description </label></div>
                                <div class="col-sm-9"> <textarea placeholder=""  name="description" class="form-control" name="pickup_address" required=""> </textarea></div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-9 col-xs-12 pull-right">
                                    <button name="submit" id="submit_btn" class="btn-1"> send message </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pt-80 hidden-lg"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- order form ends -->

@endsection