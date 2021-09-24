<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
    // index function

    public function index ()
    {
        return view('user.profile');
    }
}
