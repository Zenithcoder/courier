@extends('layouts.header')

@section('title', '| Riders')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> Rider Management Panel </h1>
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
                @foreach ($riders as $rider)
                    <tr>

                        <td>{{ $rider->name }}</td>
                        <td>{{ $rider->email }}</td>
                        <td>{{ $rider->phone_number }}</td>

                        <td>
                            <a href="{{ route('users.riders.show', $rider->id) }}" class="btn btn-warning pull-left" style="margin-right: 3px;">View</a>
                            <a href="{{ route('users.riders.edit', $rider->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.riders.destroy', $rider->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <a href="{{ route('users.riders.create') }}" class="btn btn-success">Create Rider</a>

    </div>

@endsection
