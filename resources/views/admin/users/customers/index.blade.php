@extends('layouts.header')

@section('title', '| Administrators')

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>
    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> Customer Management Panel </h1>

        <p>@if($message =Session::get('success'))
                        <div class="alert alert-success">
                      <p>
                        {{$message}}
                      </p>
                    </div>
                    @endif</p>
                    
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
                @foreach ($customers as $customer)
                    <tr>

                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone_number }}</td>

                        <td>
                            <a href="{{ route('users.customers.show', $customer->id) }}" class="btn btn-warning pull-left" style="margin-right: 3px;">View</a>
                        <!--    <a href="{{ route('users.customers.edit', $customer->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a> -->

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
</div>
</div>

@endsection
