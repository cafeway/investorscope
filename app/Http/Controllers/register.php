<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class register extends Controller
{
    //
    public function index ()
    {
        return view('auth.register');
    }

    //customized validation messages

    // public function messages ()
    // {
    //     return [
    //     'email.exists' => 'the email address exists'
    //     ];
    // }
    public function post (Request $req)
    {
        //server side validation

        $this-> validate($req, [
            'email'=> 'email|required|unique:users',
            'phonenumber'=>'required|unique:users,phonenumber'
        ]);
        User::create([
            'first_name' => $req -> first_name,
            'last_name' => $req -> last_name,
            'email' => $req -> email ,
            'password' => Hash::make($req-> password),
            'phonenumber' => $req -> phonenumber ,
            'username' => $req -> username,
            'country' => $req -> country,
        ]);
        return redirect($to= '/login');
    }
}
