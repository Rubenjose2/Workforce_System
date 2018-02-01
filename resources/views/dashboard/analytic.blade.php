@extends('layouts.main')
 @section('content') 
 {{-- Firts Section of Ghaphs --}}
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Main Category</h3>
    </div>
    <div class="panel-body">
        <div class="col-md4 col-lg-4">
            @include('dashboard.partial._userInformation')
        </div>
        <div class="col-md-8 col-lg-8">
            {{-- Total Category Graph --}} 
            @include('dashboard.graph_partial._total')
        </div>
    </div>
</div>

{{-- Activity Management Section --}}

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Activity Management</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-8 col-lg-8">
            {{-- Total Category Graph --}} 
            @include('dashboard.graph_partial._activity')
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-table" aria-hidden="true"></i> Data</h3>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>Jobs Completed same day: </strong>{{$user->score->SDCP_closed}}</p>
                    <p>
                        <strong>Jobs Scheduled: </strong>{{$user->score->SDCP_scheduled}}</p>
                    <hr size:2px>
                    <p>
                        <strong>Services Call Completed Same Day: </strong> {{$user->score->SDCs_closed}}</p>
                    <p>
                        <strong>Service Call Scheduled: </strong>{{$user->score->SDCs_scheduled}}</p>

                </div>

            </div>
        </div>
    </div>
</div>

{{-- Quality Control --}}

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Quality Control</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-8 col-lg-8">
            {{-- Total Quality Graph --}} 
            @include('dashboard.graph_partial._quality')

        </div>
        <div class="col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-table" aria-hidden="true"></i> Data</h3>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>Jobs Completed previous Month: </strong>{{$user->score->AIQ_P_closed}}</p>
                    <p>
                        <strong>Jobs with Quality 100% : </strong>{{$user->score->AIQ_P_qs}}</p>

                    <p>
                     <strong>Service Call Opened (30 Day) : </strong>{{$user->score->AIQ_P_closed - $user->score->AIQ_P_qs }}</p>
                    <hr size:2px>
                    <p>
                        <strong>Services Call previous Month: </strong> {{$user->score->AIQ_S_closed}}</p>
                    <p>
                        <strong>Service Call with Quality 100%: </strong>{{$user->score->AIQ_S_qs}}</p>
                        <p>
                    <strong>Service on Services Opened (30 Day) : </strong>{{$user->score->AIQ_S_closed - $user->score->AIQ_S_qs }}</p>

                </div>

            </div>
        </div>
    </div>
</div>

{{-- CCK --}}

<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Cinema Kit Connection</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-6 col-lg-6">
                {{-- Cinema Kit Connection --}} 
                @include('dashboard.graph_partial._cck')
    
            </div>
            <div class="col-md-6 col-lg-6">
               @include('dashboard.graph_partial._cck_goal')
            </div>
            <div class="col-md-4 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-table" aria-hidden="true"></i> Data</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6 col-md-6">
                        <p>
                            <strong>Amount of BB decas Added to WorkOrders: </strong>{{$user->score->decas}}</p>
                        <p>
                            <strong>Amount of BB decas with Call Backs </strong>{{$user->score->cb}}</p>
    
                        <p>
                         <strong>Effectivity: </strong>{{($user->score->cck_)*100 }} %</p>
                        </div>
                        <p>
                            <strong>Work order with BB Elegible: </strong> {{$user->score->elegible}}</p>
                        <p>
                            <strong>Work order with BB Elegible Closed: </strong>{{$user->score->added}}</p>
                            <p>    
                    </div>
    
                </div>
            </div>
        </div>
    </div>
{{-- Quality Control --}}

<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Quality Control</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-8 col-lg-8">
                {{-- Total Quality Graph --}} 
                @include('dashboard.graph_partial._minor')
    
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-table" aria-hidden="true"></i> Data</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            <strong>Protection Plan Sell </strong>{{$user->score->sold}} | Goal: 55%</p>
                           <p><strong>Oportunities to Sell </strong> on {{$user->score->elegible}} Jobs </p>
                           <hr>
                           <p><strong>Self QA Submitted: </strong>{{$user->score->qcs}} | Goal: 40% </p>
                          <p><strong>Work Order Closed: </strong>{{$user->score->qa_closed}}</p>
                            <hr>
                            <p><strong>Service 90 Days: </strong>{{$user->score->i90}}</p>
                      
                    </div>
    
                </div>
            </div>
        </div>
    </div>


<script src="{{asset('js/analityc.js')}}"></script>
@endsection