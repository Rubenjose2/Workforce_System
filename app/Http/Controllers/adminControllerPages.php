<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminControllerPages extends Controller
{
    public function show(){
        return view('administrator.dashboard');
    }
}
