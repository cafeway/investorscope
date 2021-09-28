<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class profile extends Controller
{
    // index function

    public function index ()
    {
        // generating unique uuid for the user
        $uuid = Str::uuid();
        $url = url($path='/register',$parameters=[
            $uuid
        ]);
        return view('user.profile',[
            'url' => $url
        ]);
    }
}
