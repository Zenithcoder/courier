@extends('layouts.header')

@section('title', '| Rider View')

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> {!! $rider->name !!} || Role: Rider</h1>
        <hr>
        <div class="container">

            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="{{ $rider->pic }}" alt="{!! $rider->name !!} photo">
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                <p>{!! $rider->email !!}</p>
            </div>

            <div class="form-group">
                {!! Form::label('address', 'Address:') !!}
                <p>{!! $rider->address !!}</p>
            </div>

            <div class="form-group">
                {!! Form::label('city', 'City:') !!}
                <p>{!! $rider->city !!}</p>
            </div>

            <div class="form-group">
                {!! Form::label('lga', 'LGA:') !!}
                <p>{!! $rider->lgas['name'] !!}</p>
            </div>

            <div class="form-group">
                {!! Form::label('status', 'Status:') !!}
                <p>
                    @if ($rider->is_status == 1)
                        Active
                    @else
                        Inactive
                    @endif
                </p>
            </div>

            <div class="form-group">
                {!! Form::label('phone_number', 'Contact Number:') !!}
                <p>{!! $rider->phone_number !!}</p>
            </div>

            <div class="form-group">
                {!! Form::label('created_at', 'Created At:') !!}
                <p>{!! $rider->created_at->format('D d, M, Y h:i') !!}</p>
            </div>

        </div>

        <a href="{{ route('users.riders.index') }}" class="btn btn-success">Back</a>  <a href="{{ route('riders.orders.index', $rider->id) }}" class="btn btn-success">Show All Orders</a>

    </div>
</div>
</div>

@endsection
