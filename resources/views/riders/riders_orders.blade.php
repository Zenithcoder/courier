 @extends('riders.layouts')

@section('title')
Riders DashBoard
@endsection

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>
                    <!-- Data Table -->
                    <div class="dashboard-widget">
                        <div class="title">
                            <i class="fa fa-users"></i>My Orders
                             
                        </div>
                        <div class="content">
                            <div class="data-table">
                                <table>
                                    <tbody>
                                        <tr>
                                             <th><i class="fa fa-sort"></i>Tracking No.</th><th><i class="fa fa-sort"></i>Pickup</th><th><i class="fa fa-sort"></i>Dropoff</th><th class="minor">status</th><th class="minor">Recipient Name</th><th class="minor">Recipient No</th><th class="minor">Payment status</th><th class="minor">Delivery date</th> <th></th><th></th><th></th>
                                        </tr>
                                    @foreach($orders as $order)
                                        <tr>
                                             <td>{{$order->tracking_number}}</td><td>{{$order->pickup_address}}</td><td><span class="text-dollar">{{$order->drop_off_address}}</span></td><td class="minor"> {{$order->status}}</td><td>{{$order->recipient_name}}</td><td>{{$order->recipient_phone_number}}</td><td>{{$order->payment_status}}</td><td>{{$order->expected_delivery_date}}</td>                
                                             <td><button class="btn btn-mini btn-info"><a href="{{route('riders.orders.show', $order->id)}}">View</a></button></td>
                                               <td><button class="btn btn-mini btn-info"><a href="{{route('riders.orders.edit', $order->id)}}">Edit</a></button></td>
                                        </tr>
                                     @endforeach    
                                    </tbody>
                                </table>
                            </div>
                            <div class="divider"></div>
                               {{$orders->links()}}
                            <div class="clearfix"></div>
                        </div>
                    </div>
                 
                    <!-- End -->
                </div>
            </div>

@endsection