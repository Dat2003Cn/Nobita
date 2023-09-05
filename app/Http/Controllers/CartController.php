<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function shop(){
        $carts = Cart::all();
        return view('MU.shop', compact('carts'));
    }
}
