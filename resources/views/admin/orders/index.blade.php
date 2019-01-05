@extends('layouts.header')

@section('title', '| Orders')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> Orders List</h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Pickup</th>
                    <th>Dropoff</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Weight</th>
                    <th>Payment Status</th>
                    <th>Assigned Status</th>
                    <th>Customer's Name</th>
                    <th>Operations</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($orders as $order)
                    <tr>

                        <td>{{ $order->pickup }}</td>
                        <td>{{ $order->dropoff }}</td>
                        <td>{{ $order->amount }}</td>
                        <td>{{ $order->type }}</td>
                        <td>{{ $order->weight }}</td>
                        <td>
                            @if ($order->payment_status == 1)
                                Paid
                            @else
                                Not Paid
                            @endif
                        </td>
                        <td>
                            @if ($order->assign == 1)
                                Yes
                            @else
                                No
                            @endif
                        </td>
                        <td>{{ $order->user['name'] }}</td>
                        <td>
                            <a href="{{ route('order.edit', $order->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['order.destroy', $order->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <a href="" class="btn btn-success">Assign</a>


    </div>

@endsection
