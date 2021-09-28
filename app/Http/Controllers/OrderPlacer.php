<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderPlacer extends Controller
{
    //
    public function  index ()
    {
        return view('Orders.addOrder');
    }
    public function order1 (Request $req)
    {
        if (Auth::user()->balance >= $req->amount){
            $this->validate($req, [
                'amount'=>'required|gte:1000',
            ]);

            //calculating profit
            $amount_invested = $req->amount;
            $profit = $amount_invested * 0.05;
            $principle = $amount_invested + $profit;

            // storing validated data into the db
            $req->user()->orders()->create([
                'profit'=> $profit,
                'principle'=> $principle,
                'status' => 'pending',
                'amount'=> $amount_invested,
            ]);

            // deduct amount invested from user balance and update user balance
            $user_balance = Auth::user()->balance;
            $new_balance = $user_balance - $amount_invested;
            DB::table('users')->where('email',Auth::user()->email)->update([
                'balance'=>$new_balance,
            ]);

            // send user a message on successfull placement

            $req->user()->messages()->create([
                'body'=>'your order of'. ' '. $amount_invested . '  '.'was successfull',
                'status'=> false
            ]);

            return redirect($to = '/orders');
        } else{
            return back()->with([
                'message'=> 'insufficient balance'
            ]);
        }
    }
    public function order2 (Request $req)
    {
        if (Auth::user()->balance >= $req->amount){
            $this->validate($req, [
                'amount'=>'required|gte:1000',
            ]);

            //calculating profit
            $amount_invested = $req->amount;
            $profit = $amount_invested * 0.1;
            $principle = $amount_invested + $profit;

            // storing validated data into the db
            $req->user()->orders()->create([
                'profit'=> $profit,
                'principle'=> $principle,
                'status' => 'pending',
                'amount'=> $amount_invested,
            ]);

            // deduct user balance
            $user_balance = Auth::user()->balance;
            $new_balance = $user_balance - $amount_invested;
            DB::table('users')->where('email',Auth::user()->email)->update([
                'balance'=>$new_balance,
            ]);

            return redirect($to = '/orders');
        } else{
            return back()->with([
                'message'=> 'insufficient balance'
            ]);
        }
    }
    public function order3 (Request $req)
    {
        if (Auth::user()->balance >= $req->amount){
            $this->validate($req, [
                'amount'=>'required|gte:1000',
            ]);

            //calculating profit
            $amount_invested = $req->amount;
            $profit = $amount_invested * 0.15;
            $principle = $amount_invested + $profit;

            // storing validated data into the db
            $req->user()->orders()->create([
                'profit'=> $profit,
                'principle'=> $principle,
                'status' => 'pending',
                'amount'=> $amount_invested,
            ]);

            // deduct user balance
            $user_balance = Auth::user()->balance;
            $new_balance = $user_balance - $amount_invested;
            DB::table('users')->where('email',Auth::user()->email)->update([
                'balance'=>$new_balance,
            ]);

            return redirect($to = '/orders');
        } else{
            return back()->with([
                'message'=> 'insufficient balance'
            ]);
        }
    }
    public function order4 (Request $req)
    {
        if (Auth::user()->balance >= $req->amount){
            $this->validate($req, [
                'amount'=>'required|gte:1000',
            ]);

            //calculating profit
            $amount_invested = $req->amount;
            $profit = $amount_invested * 0.20;
            $principle = $amount_invested + $profit;

            // storing validated data into the db
            $req->user()->orders()->create([
                'profit'=> $profit,
                'principle'=> $principle,
                'status' => 'pending',
                'amount'=> $amount_invested,
            ]);

            // deduct user balance
            $user_balance = Auth::user()->balance;
            $new_balance = $user_balance - $amount_invested;
            DB::table('users')->where('email',Auth::user()->email)->update([
                'balance'=>$new_balance,
            ]);

            return redirect($to = '/orders');
        } else{
            return back()->with([
                'message'=> 'insufficient balance'
            ]);
        }
    }
}
