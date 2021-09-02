<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

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

// Product Routes
Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/products', [ProductController::class, 'show']);
Route::get('products/{product:slug}', [ProductController::class, 'index']);

// Auth Routes
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('categories/{category:slug}', function (Category $category) {
    return view('product', [
        'posts' => $category->posts
    ]);
});

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// About route
Route::get('about', [AboutController::class, 'index']);

// Cart Routes
Route::get('cart', [CartController::class, 'create']);
Route::post('cart', [CartController::class, 'shop']);
