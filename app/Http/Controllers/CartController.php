<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Product $product){
        $amount = $product->price - ($product->price * $product->discount)/100;
        $cart = Cart::create([
            'product_id' => $product->id,
            'user_id' => auth()->user()->id,
            'price' => $product->price,
            'quantity' => 1,
            'amount' => $amount,
        ]);
        if ($cart){
            request()->session()->flash('success', 'Product added to cart successfully');
        }else{
            \request()->session()->flash('error', 'Failed, Try again!');
        }
        return back();
    }
}
