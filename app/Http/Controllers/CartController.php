<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function show()
    {
        $cart = Cart::all();
        return view('cart.show')->with('cart', $cart);
    }
    public function create()
    {
        return view('cart.create');
    }
}
