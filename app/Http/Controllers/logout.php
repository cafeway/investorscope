<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logout extends Controller
{
    //
    public function index ()
    {
        Auth::logout();
        return redirect($to='/login');
    }
}
