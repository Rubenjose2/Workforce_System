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

    return view('dashboard.analytic')->with('user',$user)
                                     ->with('inspiration',$inspirations)
                                     ->with('response',$response)
                                     ->with('response_activity',$response_activity);
    }
}
