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
    
    // public function postlist(){
        
    //     $post = DB::table('posts')->take(3)->get();

    //     return $post;
    // }

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
            
        //     $user = User::find($id);
        //     $posts = $user->post;
        //     foreach($posts as $post){
        //         $result[] = [
        //             'id'=>$post->id,
        //             'subject'=>$post->subject,
        //             'body'=>$post->body,
        //             'status'=>$post->status,
        //             'pivot'=>$post->pivot->id
        //         ];  
        //     }

        //     $sorted = $result->sortByDesc('id');
        // return $sorted;
        
        $user = User::find($id);
        $posts = $user->post;
    

        return $posts;   
    }
    /////////////////////////////////////
}
