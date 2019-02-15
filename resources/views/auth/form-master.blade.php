<div class="registration-form">
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} row input-row">
        <label for="name" class="col-md-3 control-label">Name</label>
        <div class="col-md-9">
            <input id="name" type="text" class="form-control" name="name"
                   value="@if(!Auth::guest()) {{Auth::user()->name}} @endif" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
            @endif
        </div>
    </div>

    @if(auth::guest())
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row input-row">
            <label for="email" class="col-md-3 control-label">E-mail Address</label>

            <div class="col-md-9">
                <input id="email" type="email" class="form-control" name="email" value="" required>
                @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>
        </div>
    @endif

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row input-row">
        <label for="phone_num" class="col-md-3 control-label">Phone Number</label>

        <div class="col-md-9">
            <input id="phone_number" type="text" class="form-control" name="phone_number"
                   value="@if(!Auth::guest()) {{Auth::user()->phone_number}} @endif" required>

            @if ($errors->has('phone_num'))
                <span class="help-block"><strong>{{ $errors->first('phone_num') }}</strong></span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} row input-row">
        <label for="email" class="col-md-3 control-label">Address</label>

        <div class="col-md-9">
            <input id="address" type="text" class="form-control" name="address"
                   value="@if(!Auth::guest()) {{Auth::user()->address}} @endif" required>

            @if ($errors->has('address'))
                <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
            @endif
        </div>
    </div>

<!-- @if(!Auth::guest()) {{Auth::user()->lga_idS}} @endif-->
    <div class="form-group{{ $errors->has('lga_id') ? ' has-error' : '' }} row input-row">
        <label for="lga_id" class="col-md-3 control-label">LGA</label>

        <div class="col-md-9">
            <select class="form-control" name="lga_id">
                @foreach($local as $key=>$lga)
                    <option value="{{$lga->id}}">{{$lga->name}}</option>
                @endforeach</select>
            @if ($errors->has('lga_id'))
                <span class="help-block"><strong>{{ $errors->first('lga_id') }}</strong></span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row input-row">
        <label for="password" class="col-md-3 control-label">Password</label>

        <div class="col-md-9">
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
            @endif
        </div>
    </div>

    <div class="form-group row input-row">
        <label for="password-confirm" class="col-md-3 control-label">Confirm Password</label>

        <div class="col-md-9">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>

    <div class="form-group row input-row text-center">
        <button type="submit" class="btn btn-large btn-warning">
            @if(Auth::guest())
                Register
            @else
                Update profile
            @endif
        </button>
    </div>
</div>
