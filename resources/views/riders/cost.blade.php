 @extends('riders.layouts')

@section('title')
Cost Calculator
@endsection

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>

    <div class='col-lg-4 col-lg-offset-4'>

        <p>@if($message =Session::get('success'))
                        <div class="alert alert-success">
                      <p>
                      EStimate Cost is N{{$message}}
                      </p>
                    </div>
                    @endif</p>


        <h1><i class='fa fa-user-plus'></i> Cost Estimator</h1>
        <hr>

        {{ Form::open(array('url' => 'cost-calculatorP')) }}

        <div class="form-group">
            {{ Form::label('from', 'From') }}
            {{ Form::text('from', '55 Moleye Street, Yaba', array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('to', 'To') }}
            {{ Form::text('to', '', array('class' => 'form-control')) }}
        </div>

         <div class="form-group">
            {{ Form::label('weight', 'Weight') }} <b>(Kg)</b>
            {{ Form::text('weight', '', array('class' => 'form-control')) }}
        </div>

         

        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</div>
</div>

@endsection