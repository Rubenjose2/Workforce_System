<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class userController extends Controller
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        return view('dashboard.userinfo',$user);
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
    public function update(Request $request)
    {
        $this->validation($request);
        $user = Auth::user();
        $request['password'] = bcrypt($request->password);
        // if($request->has('password')) $user->password = bcrypt($request->input('password'));
        
        $user->update($request->all());

        return redirect('/')->with('success','Your personal information have been updated');
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


    public function validation($request){
        return $this->validate($request,[
            'fname'=> 'required|max:255',
            'lname'=> 'required|max:255',
            'address'=> 'required|min:6 max:255',
            'city'=>'required|max:255',
            'state'=> 'required|max:255',
            'zip'=>'required|max:255',
            'phone'=>'required|max:255',
            'DOB'=> 'required|max:255',
            'password'=> 'required|confirmed|min:5|max:255',
        ]);
    }

    public function userlist(){
        $users = User::all();

        return view('administrator.user_list')->withUsers($users); 
    }

    public function userview($id){
        
        $user = User::find($id);

        return view('administrator.userdetail')->withUser($user);



    }
}
