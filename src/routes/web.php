<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', [ProductController::class, 'getAll']);



Route::get('/catalog', [RouteController::class, 'catalog']);
Route::get('/dashboard', [RouteController::class, 'dashboard']);
Route::get('/product', [ProductController::class, 'getCategory']);
Route::get('/home', [ProductController::class, 'getAll']);


Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('/form', [RouteController::class, 'form']);
    Route::get('/form', [ProductController::class, 'create']);
    Route::post('/form', [ProductController::class, 'store']);
    Route::get('/products/delete/{id}', [ProductController::class, 'delete']);
    Route::get('/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/update/{id}', [ProductController::class, 'update']);
});


Route::get('/products/filter', [ProductController::class, 'filter']);

Route::get('/registerr', [LoginController::class, 'showRegisterForm']);


Route::get('/hello', [LoginController::class, 'hello']);

Route::post('/registration', [LoginController::class, 'register']);

Route::get('/login', [LoginController::class, 'getLogin']);

Route::post('login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);
