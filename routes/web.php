<?php

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

Route::get('/', function () {
    return view('welcome', [
        'products' => Product::latest()->limit(2)->get()
    ]);
});

Route::get('products', function () {
    return view('products', [
        'product' => Product::latest()->get()
    ]);
});

Route::get('products/{product:slug}', function (Product $product) {
    return view('product', [
        'product' => $product
    ]);
});

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
