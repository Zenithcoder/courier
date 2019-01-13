 @extends('layouts.frontend')

@section('title')
DashBoard
@endsection

@section('content')

 <article>
        <!-- Breadcrumb -->
        <section class="theme-breadcrumb pad-50">
            <div class="theme-container container ">
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="title-wrap">
                            <h2 class="section-title no-margin"> <strong>My Shipments</strong> </h2>
                            <p class="fs-16 no-margin"> A list of all Your Shipments</p>
                            <p>@if($message =Session::get('success'))
                                    <div class="alert alert-success">
                            <p>
                                {{$message}}<i class="fas fa-check"></i>
                            </p>
                        </div>
                        @endif</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb-menubar list-inline">
                            <li><a href="#" class="gray-clr">Hello {{auth::user()->name}}</a></li>
                           <a href="{{route ('customers.orders.create')}}"> <button class="btn-1">Request Pickup</button></a>

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
                        <h2 class="title-1"> track your Shipment </h2> <span class="font2-light fs-12">Now you can track your parcel easily</span>
                        <div class="row">
                            @include('/layouts.shipment-tracker')
                        </div>
                    </div>
                </div>
                <!-- tracking status -->
                {{--<div class="progress-wrap">--}}
                    {{--<div class="progress-status">--}}
                        {{--<span class="border-left"></span>--}}
                        {{--<span class="border-right"></span>--}}
                        {{--<span class="dot dot-left wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>--}}
                        {{--<span class="themeclr-border wow fadeIn" data-wow-offset="50" data-wow-delay=".50s">  <span class="dot dot-center theme-clr-bg"></span> </span>--}}
                        {{--<span class="dot dot-right wow fadeIn" data-wow-offset="50" data-wow-delay=".60s"></span>--}}
                    {{--</div>--}}
                    {{--<div class="row progress-content upper-text">--}}
                        {{--<div class="col-md-3 col-xs-8 col-sm-2">--}}
                            {{--<p class="fs-12 no-margin"> FRdddOM </p>--}}

                        {{--</div>--}}
                        {{--<div class="col-md-2 col-xs-8 col-sm-3">--}}
                            {{--<p class="fs-12 no-margin"> [ <b class="black-clr">6 DAYS </b> ] </p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-xs-8 col-sm-4 text-center">--}}
                            {{--<p class="fs-12 no-margin"> currently in </p>--}}
                            {{--<h2 class="title-1 no-margin">singapore</h2>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-1 col-xs-8 col-sm-1 no-pad">--}}
                            {{--<p class="fs-12 no-margin"> [ <b class="black-clr">2 DAYS </b> ] </p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-xs-8 col-sm-2 text-right">--}}
                            {{--<p class="fs-12 no-margin"> to </p>--}}
                            {{--<h2 class="title-1 no-margin">dhaka</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- tracking status -->
                <!-- order hostory history -->
                <div class="row">
                    <table class="table table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th class="col-lg-1">S/N</th>
                            <th class="col-lg-2">Pickup Address </th>
                            <th class="col-lg-2">DropOff Address</th>
                            <th class="col-lg-2">Status</th>
                            <th class="col-lg-1">Tracking Number</th>
                            <th class="col-lg-1">Last Modified</th>
                            <th class="col-sm-1"></th>
                            <th class="col-sm-1"></th>
                            <th class="col-sm-1"></th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php  $no=1 ?>
                        @foreach($orders as $key=>$order)
                        {{--<tr>--}}
                            {{--<th scope="row">{{$order->pickup_address}}</th>--}}
                            {{--<td>{{$order->delivery_address}}</td>--}}
                            {{--<td>London SA</td>--}}
                        {{--</tr>--}}
                        <tr>
                            <th>{{$no++}}</th>
                            <th scope="row">{{$order->pickup_address}}</th>
                            <td>{{$order->drop_off_address}}</td>
                            @if (isset($order->status) && $order->status =='PENDING')
                                <td class="info">{{$order->status}}</td>
                            @else <td class="danger"> {{$order->status}} </td>
                            @endif

                                {{--<td>{{$order->status}}</td>--}}
                            <td>{{$order->tracking_number}}</td>
                            <td>{{$order->updated_at->diffForHumans()}}</td>
                            <td><a href="/customers/orders/{{$order->id}}/edit"><i class="fas fa-edit"></i></a></td>
                            <td>
                            {!! Form::open(['method' => 'PUT','route' => ['customers.orders.cancel', $order->id],'style'=>'display:inline']) !!}
                            <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
                            {!! Form::close() !!}


                            </td>
                            <td><a href="/customers/orders/{{$order->id}}"><i class="fas fa-eye"></i></a></td>
                        </tr>
                        @endforeach
                        {{--<tr>--}}
                        {{--<th scope="row">11:24 pm</th>--}}
                        {{--<td>Bootstrap  to reduce development time </td>--}}
                        {{--<td>London SA</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<th scope="row">11:24 pm</th>--}}
                        {{--<td> table has been  to reduce development time </td>--}}
                        {{--<td>London SA</td>--}}
                        {{--</tr>--}}

                        </tbody>
                    </table>
                </div>
            {{$orders->links()}}
            <!-- order hostory history end -->

            </div>
        </section>
        <!-- /.Tracking -->

    </article>

@endsection