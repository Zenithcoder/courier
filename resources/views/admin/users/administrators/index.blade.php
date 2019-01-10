@extends('layouts.header')

@section('title', '| Administrators')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> Administrator Management Panel </h1>
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
                @foreach ($admin as $admins)
                    <tr>

                        <td>{{ $admins->name }}</td>
                        <td>{{ $admins->email }}</td>
                        <td>{{ $admins->phone_number }}</td>

                        <td>
                            <a href="{{ route('users.administrators.show', $admins->id) }}" class="btn btn-warning pull-left" style="margin-right: 3px;">View</a>
                            <a href="{{ route('users.administrators.edit', $admins->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.administrators.destroy', $admins->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <a href="{{ route('users.administrators.create') }}" class="btn btn-success">Create Admin</a>

    </div>

@endsection
