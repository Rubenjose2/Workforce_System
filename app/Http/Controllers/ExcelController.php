<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use DB;
use Config;
use App\Score;

class ExcelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showForm(){

    return view('importexcel');
    
    }

    public function import(Request $request){
        if ($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            Config::set('excel.import.startRow', 2);
            $data = Excel::selectSheets('Partner Technician')->load($path,function($reader){})->get();
                if (!empty($data)&& $data->count()){
                    foreach($data as $key =>$value){
                        $insert[]=[
                        //tech data insert
                        'dma'=>$value->dma,
                        'partner'=>$value->partner,
                        'tech_user_id'=>$value->tech_user_id,
                        'tech_name'=>$value->tech_name,
                        'total_score'=>$value->total_score,
                        //total scores
                        'am'=>$value->am,
                        'cx'=>$value->cx,
                        'qual'=>$value->qual,
                         //SDCP
                        'SDCP_closed'=>$value->closed,
                        'SDCP_scheduled'=>$value->scheduled,
                        'SDCP_'=>$value->{0},
                        'SDCP_goal'=>$value->goal,
                        //SDCS
                        'SDCs_closed'=>$value->closed_1,
                        'SDCs_scheduled'=>$value->scheduled_1,
                        'SDCs_'=>$value->_1,
                        'SDCs_goal'=>$value->goal_1,
                        //POST CALL
                        'pts'=>$value->pts,
                        'surveys'=>$value->surveys,
                        'pc'=>$value->pc,
                        //NPS-P
                        //NPS Production
                       'nps_p_d'=>$value->p_d,
                       'nps_p_total'=>$value->total,
                       'nps_p'=>$value->nps_p,
                        //NPS Service
                       'nps_s_d'=>$value->p_d_1,
                       'nps_s_total'=>$value->total_1,
                       'nps_s'=>$value->nps_s,
                        //CCK
                      'cb'=>$value->cb,
                      'decas'=>$value->decas,
                      'cck_'=>$value->_2,
                      'added'=>$value->added,
                      'elegible'=>$value->eligible,
                      'actual'=>$value->actual,
                      'cck_goal'=>$value->goal_2,
                        //Protection Plan
                      'sold'=>$value->sold,
                      'PP_elegible'=>$value->eligible_1,
                      'PP_'=>$value->_3,
                        //AIQ Production
                      'AIQ_P_qs'=>$value->qs,
                      'AIQ_P_closed'=>$value->closed_2,
                      'AIQ_P_'=>$value->_4,
                        //AIQ SERVICE
                      'AIQ_S_qs'=>$value->qs_1,
                      'AIQ_S_closed'=>$value->closed_3,
                      'AIQ_S_'=>$value->_5,
                        //SELF QA
                      'qcs'=>$value->qcs,
                      'qa_closed'=>$value->closed_4,
                      'qa_'=>$value->_6,
                        //SIN90
                      'i90'=>$value->i90,
                      'i90_closed'=>$value->closed_5,
                      'i90_'=>$value->_7
                    ];
                    }

                    if (!empty($insert)){
                        DB::table('scores')->truncate();
                        DB::table('scores')->insert($insert);
                        return redirect('/admin/scorecard')->with('success','The Score have been loaded...');
                    }
                }
        } 
    }

    public function scorecard(){
        $score = Score::all();
        return view('administrator.scorecard')->with('score',$score);
    }
}
