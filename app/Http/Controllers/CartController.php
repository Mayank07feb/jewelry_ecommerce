<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Product $product, ProductVariation $variation){
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

    public function delete(Cart $cart){
        $status = $cart->delete();
        if ($status){
            request()->session()->flash('success', 'Cart Item deleted successfully');
        }else{
            request()->session()->flash('error', 'Failed, Try again!');
        }
        return back();
    }
}
