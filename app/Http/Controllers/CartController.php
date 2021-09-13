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

    public function shop()
    {
        $attributes = request()->all();

        Cart::add($attributes);
        return redirect('cart');
    }
}
