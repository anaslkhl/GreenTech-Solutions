<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



Route::get('/home', [RouteController::class ,'home']);
Route::get('/catalog', [RouteController::class ,'catalog']);
Route::get('/dashboard', [RouteController::class ,'dashboard']);
Route::get('/product', [RouteController::class ,'product']);

Route::get('/form', [RouteController::class ,'form']);


Route::post('/form', [ProductController::class ,'create']);


