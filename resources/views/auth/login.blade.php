<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    {{-- style --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login</title>

</head>

<body class="login-page">
    <div class="container-fluid">
        <!-- Login container -->
        <div class=" col-md-4 col-md-offset-4">

            <div class="panel panel-default login-container">
                <div class="panel-heading">
                    <img src="./img/zhionet.png"  alt="logo" class="login-image-container">
                    <h3 class="panel-title login-title text-center">WorkForce</h3>
                </div>
                <div class="panel-body">

                    <form action="{{ route('login.custom') }}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label >Username</label>
                            <input type="text" class="form-control" name="email" placeholder="email address" required autofocus>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default">Submit</button>
                            <br>
                        </div>
                    </form>

                </div>
            </div>
            <div class=" col-md-4 col-lg-4">
            </div>
        </div>


    </div>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>