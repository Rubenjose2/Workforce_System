<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use DB;
use Config;

class ExcelController extends Controller
{
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
                        'dma'=>$value->dma,
                        'partner'=>$value->partner,
                        'tech_user_id'=>$value->tech_user_id,
                        'tech_name'=>$value->tech_name,
                        'total_score'=>$value->total_score,
                        'am'=>$value->am,
                        'cx'=>$value->cx,
                        'qual'=>$value->qual,
                        'staffing'=>$value->staffing,
                        'closed'=>$value->closed,
                        'scheduled'=>$value->scheduled,
                        'goal'=>$value->goal,
                        'vs_goal'=>$value->vs_goal,
                        'score'=>$value->score,
                        'cat_score'=>$value->cat_score,
                        'plan_score'=>$value->plan_score,
                        'surveys'=>$value->plan_surveys,
                        'pc'=>$value->pc,
                        'p_d'=>$value->p_d,
                        'total'=>$value->total,
                        'nps_p'=>$value->nps_p,
                        'cb'=>$value->cb,
                        'decas'=>$value->decas,
                        'added'=>$value->added,
                        'elegible'=>$value->elegible,
                        'actual'=>$value->actual,
                        'delta'=>$value->delta,
                        'sold'=>$value->sold,
                        'qs'=>$value->qs,
                        'qcs'=>$value->qcs,
                        'i90'=>$value->i90                   
                    ];
                    }
                    if (!empty($insert)){
                        DB::table('scores')->truncate();
                        DB::table('scores')->insert($insert);
                        dd('insert are done correct');
                    }
                }
        } 
    }
}
