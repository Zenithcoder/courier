@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <p>@if($message =Session::get('success'))
                            <div class="alert alert-success">
                    <p>
                        {{$message}}
                    </p>
                </div>
                @endif</p>

                <div class="panel-body">
                    {{ Form::model($user,['route'=>['users.customers.update',$user->id],'method'=>'put']) }}
                    @include ('auth.form-master');
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
