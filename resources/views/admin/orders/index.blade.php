@extends('layouts.header')

@section('title', '| Orders')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> Order List <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
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
                    <th>Operations</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($order as $ord)
                    <tr>

                        <td>{{ $ord->pickup }}</td>
                        <td>{{ $ord->dropoff }}</td>
                        <td>{{ $ord->amount }}</td>
                        <td>{{ $ord->type }}</td>
                        <td>{{ $ord->weight }}</td>
                        <td>{{ $ord->payment_status }}</td>
                        <td>
                            <a href="{{ route('order.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['order.destroy', $user->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>

    </div>

@endsection
