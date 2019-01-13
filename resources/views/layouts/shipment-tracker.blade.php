<form method="GET" action="{{route('orders.tracking.search')}}">
    <div class="col-md-7 col-sm-7">
        <div class="form-group">
            <input type="text" name="tracking_number" placeholder="Enter your tracking number" required="" class="form-control box-shadow">
        </div>
    </div>
    <div class="col-md-5 col-sm-5">
        <div class="form-group">
            <button type="submit" class="btn-1">Track Shipment</button></a>
            {{--<button class="btn-1">track your product</button>--}}
            <hr>
        </div>
    </div>
</form>