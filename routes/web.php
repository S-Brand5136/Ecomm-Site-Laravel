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
