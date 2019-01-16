@extends('layouts.header')

@section('title', '| Edit User')

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>
    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h1>
        <hr>

        {{ Form::model($user, array('route' => array('users.riders.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('address', 'Address') }}
            {{ Form::text('address', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', 'City') }}
            {{ Form::text('city', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <!--     {{ Form::label('lga_id', 'LGA') }}
            {{ Form::number('lga_id', '', array('class' => 'form-control')) }} -->
            {{ Form::label('lga_id', 'LGA') }}
            <select class="selectpicker form-control" name="lga_id" data-live-search="true" data-width="100%"
                data-toggle="tooltip" title="Dropoff LGA">
                <option value="{{$user->lga_id}}">{{$user->lga->name}}</option>
            @foreach($local as $key=>$lga)
                <option value="{{$lga->id}}">{{$lga->name}}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
            {{ Form::label('phone_number', 'Contact Number') }}
            {{ Form::text('phone_number', null, array('class' => 'form-control')) }}
        </div>

        {{--<h5><b>Assign Role</b></h5>--}}

        {{--<div class='form-group'>--}}
            {{--@foreach ($roles as $role)--}}
                {{--{{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}--}}
                {{--{{ Form::label($role->name, ucfirst($role->name)) }}<br>--}}

            {{--@endforeach--}}
        {{--</div>--}}


      <!--  <a href="{{ route('users.riders.update', $user->id) }}" class="btn btn-warning pull-left" style="margin-right: 3px;">Update</a> -->
        {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</div>
</div>
@endsection