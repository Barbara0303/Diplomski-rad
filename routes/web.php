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

Route::get('/', function () {
    return view('welcome', ['route' => 'home']);
});

Route::get('/products', [App\Http\Controllers\HomeController::class, 'products'])->name('products');
Route::get('/aboutUs', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::get('/occasions', [App\Http\Controllers\HomeController::class, 'occasions'])->name('occasions');
Route::get('/registered', [App\Http\Controllers\HomeController::class, 'registered'])->name('registered');
Route::get('/wishlist', [App\Http\Controllers\HomeController::class, 'wishlist'])->name('wishlist');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
