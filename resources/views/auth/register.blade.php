@extends('layouts.frontend')

@section('content')

<div class="registration-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 registration-panel">
            <div class="panel panel-warning">
                <div class="panel panel-heading panel-heading__auth text-center">REGISTRATION</div>
                    @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{$message}}</p>
                        </div>
                    @endif
                <div class="panel-body">
                    {{ Form::model(['route'=>['register'],'method'=>'POST', 'class' => 'form-horizontal']) }}
                         @include ('auth.form-master')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
