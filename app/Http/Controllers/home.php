<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    // index function
    public function index()
    {
        return view('welcome');
    }
}
