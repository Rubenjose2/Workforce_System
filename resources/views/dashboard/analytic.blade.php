@extends('layouts.main')
@section('content')
{{--  Firts Section of Ghaphs  --}}
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Main Category</h3>
    </div>
    <div class="panel-body">
        <div class="col-md4 col-lg-4">
            @include('dashboard.partial._userInformation')
        </div>
        <div class="col-md-8 col-lg-8">
            {{--  Total Category Graph  --}}
            @include('dashboard.graph_partial._total')
        </div>
    </div>
</div>

{{--  Activity Management Section  --}}

<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Activity Management</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-8 col-lg-8">
            {{--  Total Category Graph  --}}
            @include('dashboard.graph_partial._activity')
            </div>
            <div class="col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class ="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-table" aria-hidden="true"></i> Data</h3>
                </div>
                <div class="panel-body">
                    <p><strong>Jobs Completed same day: </strong>{{$user->score->SDCP_closed}}</p>
                    <p><strong>Jobs Scheduled: </strong>{{$user->score->SDCP_scheduled}}</p>
                    <hr size:2px>
                    <p><strong>Services Call Completed Same Day: </strong> {{$user->score->SDCs_closed}}</p>
                    <p><strong>Service Call Scheduled: </strong>{{$user->score->SDCs_scheduled}}</p>

                </div>

            </div>
            </div>
        </div>
    </div>

    {{--  Quality Control  --}}

    <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Quality Control</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-8 col-lg-8">
                {{--  Total Category Graph  --}}
               
                </div>
                <div class="col-md-4 col-lg-4">
                <div class="panel panel-default">
                    <div class ="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-table" aria-hidden="true"></i> Data</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Jobs Completed same day: </strong>{{$user->score->SDCP_closed}}</p>
                        <p><strong>Jobs Scheduled: </strong>{{$user->score->SDCP_scheduled}}</p>
                        <hr size:2px>
                        <p><strong>Services Call Completed Same Day: </strong> {{$user->score->SDCs_closed}}</p>
                        <p><strong>Service Call Scheduled: </strong>{{$user->score->SDCs_scheduled}}</p>
    
                    </div>
    
                </div>
                </div>
            </div>
        </div>

 
 
    <script src="{{asset('js/analityc.js')}}"></script>
@endsection