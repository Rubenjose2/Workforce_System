<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class showTestController extends Controller
{

    public function showForm(){
    
        if(Auth::user()->isAdminManager()){
           echo "Yes ok";
        }else{
            echo "No";
        }
        

    }
}
