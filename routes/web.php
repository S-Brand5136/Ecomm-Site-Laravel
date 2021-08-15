<?php

use App\Http\Controllers\ProductController;
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


Route::get('categories/{category:slug}', function (Category $category) {
    return view('product', [
        'posts' => $category->posts
    ]);
});

Route::get('login', function () {
    return view('login');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('about', function () {
    return view('about');
});
