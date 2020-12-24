<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);

Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('get-logout');
Route::get('/', [\App\Http\Controllers\MainController::class, 'home'])->name('main-home');

Route::get('/team', [\App\Http\Controllers\MainController::class, 'team']);

Route::group(['middleware' => 'auth'], function (){

    Route::group(['middleware' => 'is_admin'], function (){

        Route::get('/admin', [\App\Http\Controllers\MainController::class, 'admin'])->name('admin');

        Route::get('/productdetails/{id}', [\App\Http\Controllers\MainController::class, 'getItem']);
        Route::post('/editproduct', [\App\Http\Controllers\MainController::class, 'editItem']);
        Route::get('/products', [\App\Http\Controllers\MainController::class, 'products']);
        Route::post('/addproduct', [\App\Http\Controllers\MainController::class, 'addProduct']);


        Route::get('/categories', [\App\Http\Controllers\MainController::class, 'category']);
        Route::post('/addcategory', [\App\Http\Controllers\MainController::class, 'addCategory']);
        Route::get('/categorydetails/{id}', [\App\Http\Controllers\MainController::class, 'getCategory']);
        Route::post('/editcategory', [\App\Http\Controllers\MainController::class, 'editCat']);

        Route::get('/orders', [\App\Http\Controllers\MainController::class, 'orders'])->name('orders');

    });

});

Route::get('/product/{id}', [\App\Http\Controllers\MainController::class, 'getProduct']);
Route::get('/category/{code}', [\App\Http\Controllers\MainController::class, 'categoryOne']);

Route::get('/basket', [\App\Http\Controllers\BasketController::class, 'basket'])->name('basket');
Route::get('/basket/place', [\App\Http\Controllers\BasketController::class, 'basketPlace'])->name('basket-place');
Route::post('/basket/confirm', [\App\Http\Controllers\BasketController::class, 'basketConfirm'])->name('basket-confirm');
Route::post('/basket/add/{id}', [\App\Http\Controllers\BasketController::class, 'basketAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [\App\Http\Controllers\BasketController::class, 'basketRemove'])->name('basket-remove');
