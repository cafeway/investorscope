<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class timeline extends Controller
{
    //index function
    public function index ()
    {
        return view('user.timeline');
    }
}
