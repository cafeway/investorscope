<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pwdreset extends Controller
{
    // index functin
    public function index ()
    {
        return view('auth.ResetPassword');
    }
}
