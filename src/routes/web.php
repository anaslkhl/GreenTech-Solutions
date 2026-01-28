<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



Route::get('/home', [RouteController::class ,'home']);
Route::get('/catalog', [RouteController::class ,'catalog']);
Route::get('/admin-dashboard', [RouteController::class ,'admin']);
Route::get('/product-detail', [RouteController::class ,'product']);
Route::get('/product-form', [RouteController::class ,'form']);
