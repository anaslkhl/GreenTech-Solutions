<?php

use App\Http\Controllers\FavouritesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', [ProductController::class, 'getAll']);



Route::get('/catalog', [RouteController::class, 'catalog'])->name('catalog');
Route::get('/dashboard', [RouteController::class, 'dashboard'])->name('dashboard');
Route::get('/product', [ProductController::class, 'getCategory'])->name('get_categories');
Route::get('/home', [ProductController::class, 'getAll'])->name('name');


// Route::middleware(AdminMiddleware::class)->group(function () {
// });
Route::get('/form', [RouteController::class, 'form']);
Route::get('/form', [ProductController::class, 'create'])->name('create_product');
Route::post('/store', [ProductController::class, 'store'])->name('store_product');
Route::get('/products/delete/{id}', [ProductController::class, 'delete'])->name('delete_product');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit_product');
Route::post('/update/{id}', [ProductController::class, 'update'])->name('update_product');


Route::get('/products/filter', [ProductController::class, 'filter'])->name('product_filter');

Route::get('/registerr', [LoginController::class, 'showRegisterForm'])->name('register_form');


Route::get('/hello', [LoginController::class, 'hello']);

Route::post('/registration', [LoginController::class, 'register'])->name('user_register');

Route::get('/login', [LoginController::class, 'getLogin'])->name('login_form');

Route::post('login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/favourites', [FavouritesController::class, 'favourites'])->name('favourites');
// Route::get('/favourites/getAll', [FavouritesController::class, 'getAll']);

Route::post('/toggle/{id}', [FavouritesController::class, 'toggle'])->name('toggle_favourites');





Route::get('/getProducts', [ProductController::class, 'getProducts'])->name('get_products');

Route::get('/details/{id}', [ProductController::class, 'showDetails'])->name('product_details');
Route::delete('/deleteFav/{id}', [FavouritesController::class, 'deleteFavourite'])->name('delete_product');
Route::get('/view/{id}', [ProductController::class, 'view'])->name('view');

Route::get('role/form', [RoleController::class, 'create'])->name('role_form');