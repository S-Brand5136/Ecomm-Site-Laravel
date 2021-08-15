<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'products' => Product::latest()->limit(2)->get()
        ]);
    }

    public function index(Product $product)
    {
        return view('products.index', [
            'product' => $product
        ]);
    }

    public function show()
    {
        return view('products.show', [
            'products' => Product::latest()->filter(request(['search']))->paginate(4)->withQueryString()
        ]);
    }
}
