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
        // generating an invite link
        $url = url($path='/register',$parameters=[

        ]);
        return view('user.profile',[
            'url' => $url
        ]);
    }
}
