<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    {{--  style  --}}
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    {{--  navBar head  --}}
    <nav class="navbar navbar-default navbar-fixed-top color-blue" role="navigation">
    <a class="navbar-brand white" href="/">WorkForce Personal</a>
    </nav>

    <div class="container-fluid containers">
        <div class="row">
            <!-- Begining of the Side Menu -->
            <div class=" col-md-2">
                <div class="nav-side-menu">
                    <div class="menu-list">

                        <ul id="menu-content" class="menu-content collapse out">
                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-dashboard
                                    "></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-envelope
                                    "></i> Messages
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-stats
                                    "></i> Performance
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Ending of the Side Menu -->
            <div class="col-md-9 col-lg-9">
            @yield('content')    
            </div>   
        </div>

    </div>


<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>