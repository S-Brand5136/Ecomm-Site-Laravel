<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function create()
    {
        return view('cart.create', [
            'cartItems' => Cart::content()
        ]);
    }

    public function shop($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, $product_price)->associate('App\Models\Products');
        return redirect()->view('cart.create');
    }
}
