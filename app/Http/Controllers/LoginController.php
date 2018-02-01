<?php

namespace App\Http\Controllers;
use Auth;
use App\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            $user = User::where('email',$request->email)->first();
            
            if($user->isAdmin()){
                return redirect()->route('admin');
            }
                return redirect()->route('home');
        }
        return redirect()->back();

    }
}
