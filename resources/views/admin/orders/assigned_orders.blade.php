@extends('layouts.header')

@section('title', '| Orders')

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> Assigned Order List</h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <td>S/N</td>
                    <th>Pickup</th>
                    <th>Dropoff</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Weight</th>
                    <th>Payment Status</th>
                    <th>Rider Name</th>
                    <th>Customer's Name</th>
                    <th>tracking_number</th>
                </tr>
                </thead>

                <tbody>
                <?php $no= 1; ?>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$no ++}}</td>
                        <td>{{ $order->pickup_address }}</td>
                        <td>{{ $order->drop_off_address }}</td>
                        <td>{{ $order->amount }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->weight }}</td>
                        <td>
                            @if ($order->payment_status == 1)
                                Paid
                            @else
                                Not Paid
                            @endif
                        </td>
                        <td>
                            {{ $order->rider->name }}
                        </td>
                        <td>{{ $order->recipient_name }}</td> 
                        <td>{{ $order->tracking_number }}
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        {{$orders->links()}}
     <!--   <a href="" class="btn btn-success">Assign</a>  -->


    </div>
</div>
</div>
@endsection
