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
        $fullname = $user->fname." ".$user->lname; 
        //Retriving all the post
        // $posts = DB::table('posts')->take(3)->orderBy('created_at','desc')->get();
        $user = User::find($id);
        $posts = $user->post;   
        $post_count = DB::table('posts')->count();
        return view('dashboard')->with('user',$user)
                                ->with('fullname',$fullname)
                                ->with('posts',$posts)
                                ->with('post_count',$post_count);
    }

}
