<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;
use Auth;


class adminControllerMessages extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function showPostCreator(){
    //     return view('administrator.message_builder');
    // }


    public function index()
    {
        $posts = Post::all();
    
       return view('administrator.messages_list')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


    }

    public function validation($request){
            return $this->validate($request,[
                'subject'=> 'required|max:255',
                'importance'=>'required|max:255',
                'body'=>'required',
            ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        $post = new Post;
        //Pulling the information from the current user logged
        $user = Auth::user();
        //Process of saving the message information into the database
        $post->subject = $request->subject;
        $post->body = $request->body;
        $post->importance = $request->importance;
        $post->created_by = $user->id;
        $post->save();
        //Process to assign all the post to all the user
        $this->masspostdelivery($post->id);
        //Returning to the view
        return redirect('/admin')->with('success','Your distribution message have been created');
    }

    public function masspostdelivery($post_id){
        //function to adding a message to all the users ones is created
        //Firts loop for all the user
        $users = User::all();
        foreach ($users as $user){
            //Here we are inserting values inside the pivot table
            $user->post()->attach($post_id,['status'=>'0','combine_id'=>$user->id.$post_id]);
          }
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
