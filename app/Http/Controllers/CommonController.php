<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{ 
    
    public function homeIndex()
    {
        return view('home');
    }
}
