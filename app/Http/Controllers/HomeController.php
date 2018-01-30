<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retriving the User Information
        $user = Auth::user();
        $id = $user->id;
        $user = User::find($id);
        ////////////////////////////////
        $response = '';
        ////////This can be done better//////
        if ($user->score){
            $user_total = $user->score->total_score;
            $start_rating = round((($user_total*5)/80)*2/2);  
            $user['start_rating']= $start_rating;
            $user['fullname']=$user->getFullNameFromUser();
            //This build the data needed for the MorrisChart
            $array = [
                ['description'=>'AM','value'=>$user->score->am],
                ['description'=>'CX','value'=>$user->score->cx],
                ['description'=>'Quality','value'=>$user->score->qual]
            ];
            /////////////////////////////
            $response = json_encode($array);
        }
        ///////////////////////////////////////




        $posts = $user->post;
        $post_count = DB::table('posts')->count();
        return view('dashboard')->with('user',$user)
                                ->with('posts',$posts)
                                ->with('post_count',$post_count)
                                ->with('response',$response);
    }

}
