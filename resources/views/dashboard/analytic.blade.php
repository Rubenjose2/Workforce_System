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
            <div class="col-md4 col-lg-8">
            {{--  Total Category Graph  --}}
            @include('dashboard.graph_partial._activity')
            </div>
            <div class="col-md-8 col-lg-6">

            </div>
        </div>
    </div>
 
 
    <script src="{{asset('js/analityc.js')}}"></script>
@endsection