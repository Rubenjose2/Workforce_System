<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
}
