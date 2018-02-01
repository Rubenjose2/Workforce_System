<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    {{-- style --}}
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.css"
    />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.js"></script>
    <!-- Chart Morris js -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- Chart Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

</head>

<body>
    {{-- navBar head --}}
    <nav class="navbar navbar-default navbar-fixed-top color-blue" role="navigation">
        <a class="navbar-brand white" href="/">WorkForce Personal</a>
        <nav class="nav navbar-nav navbar-right">
            <div>{{Auth::user()->fname }} </div>
        </nav>
    </nav>

    <div class="container-fluid containers">
        <div class="row">
            <!-- Begining of the Side Menu -->
            <div class=" col-md-2">
                {{-- /////////////////////////////////// --}}

                <div class="nav-side-menu">
                    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

                    <div class="menu-list">

                        <ul id="menu-content" class="menu-content collapse out">
                            <li>
                                <a href="/">
                                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                                </a>
                            </li>

                            <li>
                                <a href="{{route('user_post_list')}}">
                                    <i class="fa fa-envelope-o fa-lg"></i> Messages
                                </a>
                            </li>

                            {{--  Menu with options  --}}
                            {{--  <li data-toggle="collapse" data-target="#service" class="collapsed">
                                <a href="#">
                                    <i class="fa fa-globe fa-lg"></i> Performance
                                    <span class="arrow"></span>
                                </a>
                            </li>  --}}
                            {{--  Menu with options  --}}
                            <li >
                                <a href="#">
                                    <i class="fa fa fa-line-chart fa-lg"></i> Performance

                                </a>
                            </li> 


                            <li >
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit()" ;>
                                    <i class="fa fa-sign-out fa-lg"></i> Logout
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>





            </div>
            <!-- Ending of the Side Menu -->
            <div class="col-md-9 col-lg-9">
                @include('flash-messages') 
                @yield('content')
            </div>
        </div>

    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{asset('js/style.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>