<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'show_prod']);
Route::get('details/{id}',[ProductController::class,'details']);
Route::POST('add_to_cart',[ProductController::class,'add_to_cart']);

Route::get('/logout', function () {
    Session::forget('user');
    return view('login');
});

Route::get('/cartlist',[ProductController::class,'cartlist']);
Route::get('/removecart/{id}',[ProductController::class,'removecart']);
Route::get('/register', function () {
    return view('registration');
});
Route::post('/register',[UserController::class,'user_registration']);
