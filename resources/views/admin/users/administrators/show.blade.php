@extends('layouts.header')

@section('title', '| Admin View')

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>
    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> {!! $user->name !!} || Role: Staff</h1>
        <hr>
        <div class="container">

            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="{{ $user->pic }}" alt="{!! $user->name !!} photo">
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                <p>{!! $user->email !!}</p>
            </div>

            <div class="form-group">
                {!! Form::label('address', 'Address:') !!}
                <p>{!! $user->address !!}</p>
            </div>

            <div class="form-group">
                {!! Form::label('city', 'City:') !!}
                <p>{!! $user->city !!}</p>
            </div>

            <div class="form-group">
                {!! Form::label('lga', 'LGA:') !!}
                <p>{!! $user->lgas['name'] !!}</p>
            </div>

            <div class="form-group">
                {!! Form::label('status', 'Status:') !!}
                <p>
                    @if ($user->is_status == 1)
                        Active
                    @else
                        Inactive
                    @endif
                </p>
            </div>

            <div class="form-group">
                {!! Form::label('phone_number', 'Contact Number:') !!}
                <p>{!! $user->phone_number !!}</p>
            </div>

            <div class="form-group">
                {!! Form::label('created_at', 'Created At:') !!}
                <p>{!! $user->created_at->format('D d, M, Y h:i') !!}</p>
            </div>

        </div>

        <a href="{{ route('users.administrators.index') }}" class="btn btn-success">Back</a>

    </div>
</div>
</div>
@endsection
