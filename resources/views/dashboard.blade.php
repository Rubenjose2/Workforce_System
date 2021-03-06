@extends('layouts.main')
{{--  Adding the star rating stylus  --}}
<link href="{{ asset('css/star-rating.css') }}" rel="stylesheet">   

@section('content')

<div class="container">
    <div class="page-header">
        <h1>Dashboad<small></small></h1>
    </div>
    <div class="row">
        <div class=" col-md-5 col-lg-5">
            <!-- Personal Information Card -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Personal Information</h3>
                </div>
                <!-- Panel Information content start -->
                <div class="personal-information-content">
                    <div class="panel-body">
                        <div class="row">
                            <!-- Image and Rating Display -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                            <img src="/uploads/avatars/{{$user->picture}}" class="img-responsive avatar-profile"  />
                            @if($user->score)
                                <div class="star-ratings-css" title="{{$user->start_rating}}">                              
                                </div>
                                @endif  
                            </div>
                            <!-- End Rating Display -->
                            <!-- Begining Personal Data Display -->
            
                            <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                                <div class="name-badge">
                                {{$user->getFullNamefromUser()}}
                                </div>
                                <div>ID: {{Auth::user()->tech_id}}</div>
                                <div>
                                    Title: {{$user->roles->description}}
                                </div>
                                <br>
                                <a type="button" href="/user_edit" class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i>  Edit</a>
            
            
                            </div>
            
                        </div>
                    </div>
                    <!-- End of perfonal information content -->
                </div>
            
            </div>
        </div>
        <!-- End of Perfonal Information Card -->
        <div class=" col-md-7 col-lg-7">
            <!-- Begining of the Analytics Card -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Analytics</h3>
                </div>
                <div class="panel-body ">


                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <!-- Begining of Point -->
                            <div class="panel panel-default panel-point-container">
                                <div class="panel-body text-center">
                                    <div class="point-container ">
                                    @if($user->score)
                                    {{$user->score->total_score}}</div>
                                    <div>Points</div>
                                    @else
                                    N/A </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <div id="myfirstchart" style="height: 250px;"></div>
                        </div>

                    </div>


                </div>
            </div>
            <!-- Ending of Analytics Card -->
        </div>
    </div>

    <div class="row">

        <div class="col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Messages</h3>
                </div>
                <div class="panel-body">
                @include('dashboard.partial._post_list')
                @include('dashboard.partial._modal')
                </div>
            </div>
        </div>

    </div>

</div>
<script>var data = {!!$response!!}</script>
<script src="{{asset('js/chart.js')}}"></script>

@endsection



