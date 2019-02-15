
<div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2"> Recipient Name</label></div>
                                <div class="col-sm-9"> <input type="text" placeholder="" class="form-control" name="recipient_name"  value="@if (isset($order->recipient_name))
                                    {{$order->recipient_name}}
                                    @endif" required=""> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2"> Recipient Phone Number</label></div>
                                <div class="col-sm-9"> <input type="text" placeholder=""  value="@if (isset($order->recipient_phone_number))
                                    {{$order->recipient_phone_number}}
                                    @endif" class="form-control" name="recipient_phone_number" required=""> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2">Pickup Address </label></div>
                                <div class="col-sm-9"> <input type="text" placeholder="" value="@if (isset($order->pickup_address))
                                    {{$order->pickup_address}}
                                    @endif" class="form-control" name="pickup_address" required=""> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2">Recipient Address </label></div>
                                <div class="col-sm-9"> <input type="text" placeholder="" value="@if (isset($order->drop_off_address))
                                    {{$order->drop_off_address}}
                                    @endif" class="form-control" name="drop_off_address" required=""> </div>
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
        <div class="col-sm-9"> <textarea placeholder=""  name="description" class="form-control" name="pickup_address" required=""> @if (isset($order->description))
                    {{$order->description}}
                @endif </textarea></div>
    </div>
    <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
        <div class="col-sm-9 col-xs-12 pull-right">
            <button name="submit" id="submit_btn" class="btn-1">  Submit </button>
        </div>
    </div>