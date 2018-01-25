@extends('layouts.main') @section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2 white-container">
        <form action={{route( 'user-edit')}} method="POST">
            {{csrf_field()}}
            <legend>Login Information</legend>
            <!-- Login Information -->
            <div class="row">

                <div class=" col-md-6 col-lg-6">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class=" col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="">Confirm you Password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="password">
                    </div>
                </div>
            </div>

            {{-- Personal Information --}}
            <legend>Personal Information</legend>
            <div class="row">
                <div class=" col-md-6 col-lg-6">
                    <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="fname" value={{$fname}} placeholder="Ex: John">
                    </div>
                    @if ($errors->has('fname'))
                    <span class="help-block">
                        <strong>The Firts Name is required</strong>
                    </span>
                    @endif
                </div>
                <div class=" col-md-6 col-lg-6">
                    <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="lname" value="{{$lname}}" placeholder="Ex: Smith">
                    </div>
                </div>
                @if ($errors->has('lname'))
                <span class="help-block">
                    <strong>The Last Name is required</strong>
                </span>
                @endif
            </div>
            <div class="row">
                <div class=" col-md-12 col-lg-12">
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="">Adress</label>
                        <input type="text" class="form-control" name="address" value="{{$address}}" placeholder="Address">
                    </div>
                    @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <!-- City, Zipcode and State -->
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                        <label for="">City</label>
                        <input type="text" class="form-control" name="city" value="{{$city}}" placeholder="City">
                    </div>
                    @if ($errors->has('city'))
                    <span class="help-block">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-4">
                    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="">State</label>
                        <select name="state" class="form-control">
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                        </select>
                    </div>
                    @if ($errors->has('state'))
                    <span class="help-block">
                        <strong>{{ $errors->first('state') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                        <label for="">Zip Code</label>
                        <input type="number" class="form-control" name="zip" value="{{$zip}}" placeholder="Ex:10001">
                    </div>
                    @if ($errors->has('zip'))
                    <span class="help-block">
                        <strong>{{ $errors->first('zip') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control input-medium bfh-phone" name="phone" data-format=" (ddd) ddd-dddd" value="{{$phone}}"
                            placeholder="">
                    </div>
                    @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('state') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group{{ $errors->has('DOB') ? ' has-error' : '' }}">
                        <label for="">Date of Birth</label>
                        <input type="date" class="form-control" name="DOB" value="{{$DOB}}" placeholder="">
                    </div>
                    @if ($errors->has('DOB'))
                    <span class="help-block">
                        <strong>Your date of birth is required</strong>
                    </span>
                    @endif
                </div>

            </div>
            {{-- Additional Information --}}
            <legend>Aditional Information</legend>
            <div class="row">
                <div class="col-md-4">Tech id:{{$tech_id}}</div>
                <div class="col-md-4">User Creation: {{$created_at}}</div>
            </div>
            <br>
            <br>
            <div>
                <button type="submit" class="btn btn-default">Submit</button>
                <a href="/" type="cancel" class="btn btn-warning">Cancel</a>
            </div>

    </div>
    </form>
</div>
@endsection