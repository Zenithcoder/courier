@extends('layouts.header')

@section('title', '| Administrators')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> Customer Management Panel </h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Operations</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($customer as $customers)
                    <tr>

                        <td>{{ $customers->name }}</td>
                        <td>{{ $customers->email }}</td>
                        <td>{{ $customers->phone_number }}</td>

                        <td>
                            <a href="{{ route('users.customers.show', $customers->id) }}" class="btn btn-warning pull-left" style="margin-right: 3px;">View</a>
                            <a href="{{ route('users.administrators.edit', $customers->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {{--{!! Form::open(['method' => 'DELETE', 'route' => ['users.customers.destroy', $customers->id] ]) !!}--}}
                            {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        {{--<a href="{{ route('users.customers.create') }}" class="btn btn-success">Create Admin</a>--}}

    </div>

@endsection
