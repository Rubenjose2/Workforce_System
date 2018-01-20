<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- style --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Registry</title>
</head>

<body class="login-page">
    <div class="container-fluid">
        <!-- Login container -->
        <div class=" col-md-8 col-md-offset-2">
                @if (count($errors)>0)
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img src="./img/zhionet.png" alt="logo" class="login-image-container">
                    <h3 class="panel-title login-title text-center">WorkForce</h3>
                </div>
                <div class="panel-body">
                    <form action="{{route('custom.register')}}" method="POST" >
                        {{csrf_field()}}
                        <legend>Login Information</legend>
                        <!-- Login Information -->
                        <div class="row">

                            <div class=" col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="">Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="example@address.com">
                                </div>
                            </div>
                            <div class=" col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-md-6 col-lg-6 text-center" >
                                <div>
                                    <br>
                                    <strong>Please Confirm your Password </strong>
                                </div>
                            </div>
                            <div class=" col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="">Confirm you Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="password">
                                </div>
                            </div>
                        </div>
                        <!-- End Login information -->
                        <!-- Personal Information -->
                        <legend>Personal Information</legend>
                        <div class="row">
                            <div class=" col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="fname"  value="{{old('fname')}}" placeholder="Ex: John">
                                </div>
                            </div>
                            <div class=" col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" name="lname" value="{{old('lname')}}" placeholder="Ex: Smith">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="">Adress</label>
                                    <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <!-- City, Zipcode and State -->
                        <div class="row">

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="">City</label>
                                    <input type="text" class="form-control" name="city" value="{{old('city')}}" placeholder="City">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-4">
                                <div class="form-group">
                                    <label for="">State</label>
                                    <select name="state"class="form-control">
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="">Zip Code</label>
                                    <input type="number" class="form-control" name="zip" value="{{old('zipcode')}}" placeholder="Ex:10001">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
                </form>
            </div>
        </div>
        <div class=" col-md-4 col-lg-4">
        </div>
    </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>