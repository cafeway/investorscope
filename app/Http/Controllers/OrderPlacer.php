<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderPlacer extends Controller
{
    //
    public function  index ()
    {
        return view('Orders.addOrder');
    }
}
