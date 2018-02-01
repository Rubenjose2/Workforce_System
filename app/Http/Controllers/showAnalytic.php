<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Score;
use App\Inspiration;


class showAnalytic extends Controller
{
    public function show(){
        $id= Auth::id();
        $user = User::find($id);

        $inspirations = Inspiration::all();

        //Main Category data build;
        $user_total = $user->score->total_score;
        $array = [$user->score->am,$user->score->qual,$user->score->cx];
        $response = json_encode($array);
        //Activity Mangement Graph
        $array2 = [($user->score->SDCP_)*100,($user->score->SDCP_goal)*100,($user->score->SDCs_)*100,($user->score->SDCs_goal)*100];
        $response_activity = json_encode($array2);
        //Quality Control Graph
        $array3=[($user->score->AIQ_P_)*100,($user->score->AIQ_S_)*100];
        $response_quality = json_encode($array3);
        //Cinema Kit Connection 
        $array4 = [$user->score->decas,$user->score->cb,$user->score->elegible,$user->score->added];
        $response_cck = json_encode($array4);
        //Cinema Kit Connection Goal
        $array5 = [($user->score->actual)*100,($user->score->cck_goal)*100];
        $response_cck_goal= json_encode($array5);
        //Minor Charts//
        $array6 = [($user->score->PP_)*100,($user->score->qa_)*100,($user->score->i90_)*100];
        $response_minor = json_encode($array6);

    return view('dashboard.analytic')->with('user',$user)
                                     ->with('inspiration',$inspirations)
                                     ->with('response',$response)
                                     ->with('response_activity',$response_activity)
                                     ->with('response_quality',$response_quality)
                                     ->with('response_cck',$response_cck)
                                     ->with('response_cck_goal',$response_cck_goal)
                                     ->with('response_minor',$response_minor);
    }
}
