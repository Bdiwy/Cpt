<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Login;

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

Route::get('/', [BackController::class,'index']);


Route::get('/Services', [BackController::class,'services']);
Route::get('/Sub',[BackController::class,'sub']);


Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');



Route::get('/test',[CrudController::class,'get']);



Route::get('/edit/{id}',[CrudController::class,'edit']);

Route::post('/update/{id}',[CrudController::class,'update']);

Route::get('/delete/{id}',[CrudController::class,'delete']);

Route::get('/login',[BackController::class,'login'])->name('login');



Route::get('/Signup',[BackController::class,'Signup'])->name('Signup');





Route::post('/store',[CrudController::class,'store'])->name('store');


