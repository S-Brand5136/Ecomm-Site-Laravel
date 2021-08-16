<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('categories/{category:slug}', function (Category $category) {
    return view('product', [
        'posts' => $category->posts
    ]);
});

Route::get('login', function () {
    return view('login');
});

Route::get('about', function () {
    return view('about');
});
