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