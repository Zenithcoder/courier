@extends('layouts.header')

@section('title', '| Add User')

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>

    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-user-plus'></i> Add Administrator</h1>
        <hr>

        {{ Form::open(array('url' => 'users/administrators/store')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', '', array('class' => 'form-control')) }}
        </div>

        {{--<div class='form-group'>--}}
            {{--@foreach ($roles as $role)--}}
                {{--{{ Form::checkbox('roles[]',  $role->id ) }}--}}
                {{--{{ Form::label($role->name, ucfirst($role->name)) }}<br>--}}

            {{--@endforeach--}}
        {{--</div>--}}

        <div class="form-group">
            {{ Form::label('password', 'Password') }}<br>
            {{ Form::password('password', array('class' => 'form-control')) }}

        </div>

        <div class="form-group">
            {{ Form::label('address', 'Address') }}
            {{ Form::text('address', '', array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', 'City') }}
            {{ Form::text('city', '', array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
       <!--     {{ Form::label('lga_id', 'LGA') }}
            {{ Form::number('lga_id', '', array('class' => 'form-control')) }} -->

            <select class="selectpicker form-control" name="lga_id" data-live-search="true" data-width="100%"
                data-toggle="tooltip" title="Dropoff LGA">
            @foreach($local as $key=>$lga)
                <option value="{{$lga->id}}">{{$lga->name}}</option>
            @endforeach
        </select>
        </div> 

        <div class="form-group">
            <!--   {{ Form::label('is_status', 'Status') }}
            {{ Form::number('is_status', '', array('class' => 'form-control')) }} -->
            <input type="hidden" name="is_status" value="1">
        </div>

        <div class="form-group">
            {{ Form::label('pic', 'Profile Photo') }}
            {{ Form::file('pic') }}
        </div>

        <div class="form-group">
            {{ Form::label('phone_num', 'Phone Number') }}
            {{ Form::text('phone_num', '', array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</div>
</div>
@endsection