<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    //
    public function index ()
    {
        return view('auth.login');
    }
    public function post (Request $req)
    {
        $email = $req->email;
        $password = $req->password;
        if(!Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect($to ='/login')->with('status','either email or password is wrong');
        }
        return redirect($to = '/');
    }
}
