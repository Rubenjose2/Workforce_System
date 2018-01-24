<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class userAuthController extends Controller
{
    public function showRegisterform(){
        return view('custom.register');
    }
    public function register(Request $request){
        $this->validation($request);
        $request['password'] = bcrypt($request->password);
        User::create($request->all());
        return redirect('/dashboard')->with('Status','You are registed');
    }
    public function validation($request){
        return $this->validate($request,[
            'fname'=> 'required|max:255',
            'lname'=> 'required|max:255',
            'address'=> 'required|max:255',
            'city'=>'required|max:255',
            'state'=> 'required|max:255',
            'zip'=>'required|max:255',
            'phone'=>'required|max:255',
            'DOB'=> 'required|max:255',
            'email'=> 'required|email|unique:users|max:255',
            'password'=> 'required|confirmed|max:255',
        ]);
    }

}
