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
        $data = $request->all();
        
        $post = Post::find($data);

        return $post;   
    }

    public function postlist(){
        
        $post = DB::table('posts')->take(3)->get();

        return $post;
    }

    public function userUpdatePost(Request $request){
        
        $post_id = $request['id'];

        return $post_id;

        // //Full the user Id to be saved
        // $id = Auth::id();
        // $user = User::find($id);
        // $post_id=$request['id'];
        // $combine_id= $user->id.$post_id;
        // $date =new \DateTime();
        // //This would check firts is the user already read this Post in order to dont duplicate values
        // $sql= DB::table('post_user')->where('combine_id',$combine_id)->get();
        // if($sql->isEmpty()){
        //     $user->post()->attach(2,['status'=>'1','updated_at'=>$date,'combine_id'=>$combine_id]);
        // }   
    }


    //SANDBOX ONLY TEST ROUTE//
      public function usertest($id){
            
            $user = User::find($id);
            $posts = $user->post;
            foreach($posts as $post){
                $result[] = [
                    'id'=>$post->id,
                    'subject'=>$post->subject,
                    'body'=>$post->body,
                    'status'=>$post->status,
                    'pivot'=>$post->pivot->id
                ];  
            }

            $sorted = $result->sortByDesc('id');
        return $sorted;
    }
    /////////////////////////////////////
}
