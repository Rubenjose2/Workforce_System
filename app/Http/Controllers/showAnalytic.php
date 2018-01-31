<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Score;


class showAnalytic extends Controller
{
    public function show(){
        $id= Auth::id();
        $user = User::find($id);
        //Main Category data build;
        $user_total = $user->score->total_score;
        $array = [$user->score->am,$user->score->cx,$user->score->qual];
        $response = json_encode($array);
        //Activity Mangement Graph
        $array2 = [$user->score->SDCP_closed,$user->score->SDCP_scheduled,$user->score->SDCs_closed,$user->score->SDCs_scheduled];
        $response_activity = json_encode($array2);

    return view('dashboard.analytic')->with('user',$user)
                                     ->with('response',$response)
                                     ->with('response_activity',$response_activity);
    }
}
