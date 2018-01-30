@extends('layouts.admin') 
@section('content')
<table id="table-data" class="table table-striped" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>DMA</th>
            <th>Partner</th>
            <th>Tech Id</th>
            <th>Tech Name</th>
            <th>Total Score</th>
            <th>AM</th>
            <th>CX</th>
            <th>Quality</th>
{{--  
            <th>SDC-P Closed</th>
            <th>SDC-P Scheduled</th>
            <th>SDC-P %</th>
            <th>SDC-P Goal</th>

            <th>SDC-S Closed</th>
            <th>SDC-S Scheduled</th>
            <th>SDC-S %</th>
            <th>SDC-S Goal</th>

            <th>Total of Points</th>
            <th>Number of Surveys</th>
            <th>Post Call %</th>

            <th>Promoter / Detractor</th>
            <th>Total</th>
            <th>NPS Product</th>

            <th>Promoter / Detractor</th>
            <th>Total</th>
            <th>NPS Service</th>

            <th>Call Back</th>
            <th>DECA</th>
            <th>%</th>

            <th>Deca Added</th>
            <th>Deca Elegible</th>
            <th>Actual %</th>
            <th>Goal %</th>

            <th>PP Sold</th>
            <th>PP Elegible</th>
            <th>PP %</th>

            <th>Service</th>
            <th>WO Closed</th>
            <th>%</th>

            <th>Service</th>
            <th>WO Closed</th>
            <th>%</th>

            <th>QA Submitted</th>
            <th>WO Closed</th>
            <th>%</th>

            <th>i90 Created</th>
            <th>WO Closed</th>
            <th>%</th>   --}}
        </tr>
    </thead>
    <tbody>
            @foreach($score as $key)
            <tr>
           
                <th>{{$key->dma}}</th>
                <th>{{$key->partner}}</th>
                <th>{{$key->tech_user_id}}</th>
                <th>{{$key->tech_name}}</th>
                <th>{{$key->total_score}}</th>
                <th>{{$key->am}}</th>
                <th>{{$key->cx}}</th>
                <th>{{$key->qual}}</th>
                
                {{--  <th>{{$key->closed}}</th>
                <th>{{$key->scheduled}}</th>
                <th>{{$key->_0}}</th>
                <th>{{$key->goal}}</th>
                
                <th>{{$key->closed_1}}</th>
                <th>{{$key->scheduled_1}}</th>
                <th>{{$key->_1}}</th>
                <th>{{$key->goal_1}}</th>

                <th>{{$key->pts}}</th>
                <th>{{$key->surveys}}</th>
                <th>{{$key->pc}}</th>

               <th>{{$key->p_d}}</th>
               <th>{{$key->total}}</th>
               <th>{{$key->nps_p}}</th>

               <th>{{$key->p_d_1}}</th>
               <th>{{$key->total_1}}</th>
               <th>{{$key->nps_s}}</th>
                
              <th>{{$key->cb}}</th>
              <th>{{$key->decas}}</th>
              <th>{{$key->_2}}</th>
              <th>{{$key->added}}</th>
              <th>{{$key->eligible}}</th>
              <th>{{$key->actual}}</th>
              <th>{{$key->goal_2}}</th>

              <th>{{$key->sold}}</th>
              <th>{{$key->eligible_1}}</th>
              <th>{{$key->_3}}</th>

              <th>{{$key->qs}}</th>
              <th>{{$key->closed_2}}</th>
              <th>{{$key->_4}}</th>
                
              <th>{{$key->qs_1}}</th>
              <th>{{$key->closed_3}}</th>
              <th>{{$key->_5}}</th>
            
              <th>{{$key->qcs}}</th>
              <th>{{$key->closed_4}}</th>
              <th>{{$key->_6}}</th>
            
              <th>{{$key->i90}}</th>
              <th>{{$key->closed_5}}</th>
              <th>{{$key->_7}}</th>   --}}
            
        </tr>
        @endforeach
    </tbody>

</table>

@endsection