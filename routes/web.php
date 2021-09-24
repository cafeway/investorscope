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

Route::get('/profile',[profile::class,'index'])->name('profile');
Route::post('/profile',[profile::class,'post']);

Route::get('/timeline',[timeline::class,'index'])->name('timeline');
Route::post('/timeline',[timeline::class,'post']);

Route::post('/logout',[logout::class,'index'])->name('logout');

Route::get('/orders',[OrderManager::class,'index'])->name('manageorder');
Route::post('/orders',[OrderManager::class,'post']);

Route::get('/placeorder',[OrderPlacer::class,'index'])->name('placeorder');
Route::post('/placeorder',[OrderPlacer::class,'post']);


Route::get('/billing',[Fund::class,'index'])->name('fund');
Route::post('/billing',[Fund::class,'post']);


Route::get('/chat',[Chat::class,'index'])->name('chat');
Route::post('/chat',[Chat::class,'post']);
