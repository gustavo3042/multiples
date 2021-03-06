<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[FrontpageController::class, 'home']);

Route::post('/orders',[OrderController::class, 'store']);

Route::get('/orders',[OrderController::class, 'index']);



Route::get('/items/{id}',[OrderController::class, 'items']);
