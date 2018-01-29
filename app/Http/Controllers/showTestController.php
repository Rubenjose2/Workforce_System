<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showTestController extends Controller
{

    public function showForm(){
    return view('administrator.test_picture_upload');
    }
}
