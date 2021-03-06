<?php

use App\Http\Controllers\Chat;
use App\Http\Controllers\Fund;
use App\Http\Controllers\home;
use App\Http\Controllers\login;
use App\Http\Controllers\logout;
use App\Http\Controllers\OrderManager;
use App\Http\Controllers\OrderPlacer;
use App\Http\Controllers\profile;
use App\Http\Controllers\pwdreset;
use App\Http\Controllers\register;
use App\Http\Controllers\timeline;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[home::class,'index'])->name('home')->middleware('auth');
Route::post('/',[home::class,'post']);

//Login
Route::get('/login',[login::class,'index'])->name('login');
Route::post('/login',[login::class,'post']);
// Register
Route::get('/register',[register::class,'index'])->name('register');
Route::post('/register',[register::class,'post']);

// reset Password
Route::get('/pwdreset',[pwdreset::class,'index'])->name('resetpassword');
Route::post('/pwdreset',[pwdreset::class,'reset']);

Route::get('/profile',[profile::class,'index'])->name('profile')->middleware('auth');
Route::post('/profile',[profile::class,'post']);

Route::get('/timeline',[timeline::class,'index'])->name('timeline')->middleware('auth');
Route::post('/timeline',[timeline::class,'post']);

Route::post('/logout',[logout::class,'index'])->name('logout');

Route::get('/orders',[OrderManager::class,'index'])->name('manageorder')->middleware('auth');
Route::post('/orders',[OrderManager::class,'post']);

Route::get('/placeorder',[OrderPlacer::class,'index'])->name('placeorder');
Route::post('/placeorder/order1',[OrderPlacer::class,'order1'])->name('order1')->middleware('auth');
Route::post('/placeorder/order2',[OrderPlacer::class,'order2'])->name('order2')->middleware('auth');
Route::post('/placeorder/order3',[OrderPlacer::class,'order3'])->name('order3')->middleware('auth');
Route::post('/placeorder/order4',[OrderPlacer::class,'order4'])->name('order4')->middleware('auth');

Route::get('/billing',[Fund::class,'index'])->name('fund')->middleware('auth');
Route::post('/billing',[Fund::class,'post'])->middleware('auth');


Route::get('/chat',[Chat::class,'index'])->name('chat');
Route::post('/chat',[Chat::class,'post']);
