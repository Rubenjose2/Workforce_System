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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> {{-- Jquery and Bootstrap js --}}

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>



</head>

<body>
    {{-- navBar head --}}
    <nav class="navbar navbar-default navbar-fixed-top color-blue" role="navigation">
        <a class="navbar-brand white" href="/">WorkForce Admin Panel</a>
    </nav>

    <div class="container-fluid containers">
        <div class="row">
            <!-- Begining of the Side Menu -->
            <div class=" col-md-2">
                <div class="nav-side-menu">
                    <div class="menu-list">

                        <ul id="menu-content" class="menu-content collapse out">
                            <li>
                                <a href="{{route('admin')}}">
                                    <i class="glyphicon glyphicon-dashboard
                                    "></i> Dashboard
                                </a>
                            </li>
                            <li data-toggle="collapse" data-target="#users" class="collapsed">
                                <a href="#">
                                    <i class="glyphicon glyphicon-user"></i> Users
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <ul class="sub-menu collapse" id="users">
                                <li>
                                    <a href="{{route('user.list')}}">List of User </a>
                                </li>
                            </ul>
                            <li>
                                <li data-toggle="collapse" data-target="#post" class="collapsed">
                                    <a href="#">
                                        <i class="glyphicon glyphicon-envelope"></i> Messages
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="post">
                                    <li>
                                        <a href="{{route('postform.show')}}">Create a New Message </a>
                                    </li>
                                    <li>
                                        <a href="{{route('posts.index')}}">List all the Messages</a>
                                    </li>
                                </ul>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-stats
                                    "></i> Performance
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit()" ;>
                                        <i class="glyphicon glyphicon-off "></i> Logout
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
                @include('flash-messages') @yield('content')
            </div>
        </div>

    </div>


    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>