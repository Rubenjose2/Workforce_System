<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class showMessangerForm extends Controller
{
    public function show(){
        return view('administrator.message_builder');
    }

    public function showPost(Request $request){
        $id = $request->all();
        
        $post = Post::find($id);



        return $post;   
    }
}
