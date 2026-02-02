<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'getAll']);



Route::get('/catalog', [RouteController::class, 'catalog']);
Route::get('/dashboard', [RouteController::class, 'dashboard']);
Route::get('/product', [ProductController::class, 'getCategory']);

Route::get('/form', [RouteController::class, 'form']);

Route::get('/home', [ProductController::class, 'getAll']);

Route::get('/form', [ProductController::class, 'create']);
Route::post('/form', [ProductController::class, 'store']);


Route::get('/products/delete/{id}', [ProductController::class, 'delete']);
Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::post('/update/{id}', [ProductController::class, 'update']);

Route::get('/products/filter', [ProductController::class, 'filter']);

Route::get('/register', [LoginController::class, 'showRegisterForm']);


Route::get('/hello', [LoginController::class, 'hello']);
Route::post('/register', [LoginController::class, 'register']);
