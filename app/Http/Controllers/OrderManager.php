<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderManager extends Controller
{
    //
    public function index ()
    {
        $orders = DB::table('orders')->where('user_id',Auth::user()->id)->get();
        $completed = DB::table('orders')->where('user_id',Auth::user()->id)->where('status','matured')->get();
        return view('Orders.manageOrder',[
            'orders'=>$orders,
            'completed'=>$completed
        ]);
    }
}
