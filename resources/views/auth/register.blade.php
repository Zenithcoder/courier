@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
                <div class="panel panel-warning">Register</div>
                  <p>@if($message =Session::get('success'))
    <div class="alert alert-success">
  <p>
    {{$message}}
  </p>
</div>
@endif</p>

                <div class="panel-body">
                    {{ Form::model(['route'=>['register'],'method'=>'POST', 'class' => 'form-horizontal']) }}
                    @include ('auth.form-master');
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
