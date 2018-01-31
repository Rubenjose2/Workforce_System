<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;
use Auth;

class showMessangerForm extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(){
        return view('administrator.message_builder');
    }

    public function showPost(Request $request){
        $data = $request->id;
        //Pulling Data firts
        $user_id = Auth::id();
        $post = Post::find($data);
        return $post;   
    }
    
    public function postlist(){
        $user = Auth::user();
        $id = $user->id;
        $user = User::find($id);
        $posts = $user->post;  

        return view('dashboard.post_list')->with('posts',$posts);
    }

    public function userUpdatePost(Request $request){
        
        $id = Auth::id();
        $user = User::find($id);
        $post_id=$request['id'];
        $date =new \DateTime();

        $user->post()->updateExistingPivot($post_id,['status'=>'1','updated_at'=>$date]);
        
        return $request; 
    }



    //SANDBOX ONLY TEST ROUTE//
      public function usertest($id){
            

        
        $user = User::find($id);
        $user->score;
        

        //starting calculation of analityc

        /////////star calculations///////////// 

 
        if ($user->score){
            $user_total = $user->score->total_score;
            $start_rating = (($user_total*5)/80);    
            $user['start_rating']= $start_rating;
            $user['fullname']=$user->getFullNameFromUser();
        }

        $response = [
            'am'=>$user->score->am,
            'cx'=>$user->score->cx,
            'qual'=>$user->score->qual
        ];

        // $start_rating = (($user_total*5)/80);    
        // $user['start_rating']= $start_rating;
        // $user['fullname']=$user->getFullNameFromUser();
        return [$user,json_encode($response)];   
    }
    /////////////////////////////////////
}
