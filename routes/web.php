<?php

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'home']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/team', [\App\Http\Controllers\MainController::class, 'team']);

Route::get('/admin', [\App\Http\Controllers\MainController::class, 'admin'])->name('admin');

Route::get('/categories', [\App\Http\Controllers\MainController::class, 'category']);

Route::post('/addcategory', [\App\Http\Controllers\MainController::class, 'addCategory']);

Route::get('/products', [\App\Http\Controllers\MainController::class, 'products']);

Route::post('/addproduct', [\App\Http\Controllers\MainController::class, 'addProduct']);

Route::get('/product/{id}', [\App\Http\Controllers\MainController::class, 'getProduct']);

Route::get('/categorydetails/{id}', [\App\Http\Controllers\MainController::class, 'getCategory']);

Route::post('/editcategory', [\App\Http\Controllers\MainController::class, 'editCat']);

Route::get('/productdetails/{id}', [\App\Http\Controllers\MainController::class, 'getItem']);

Route::post('/editproduct', [\App\Http\Controllers\MainController::class, 'editItem']);
