<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',function(){
    return view('home');
});
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/auth',[AuthController::class,'auth'])->name('auth');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('notoken')->name('dashboard');
