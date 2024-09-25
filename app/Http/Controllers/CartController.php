<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Product $product, ProductVariation $variation){
        $price = $variation->price - ($variation->price * $product->discount)/100;
        $existingCart = Cart::where(['product_id' => $product->id, 'user_id' => auth()->user()->id])->first();
        if ($existingCart){
            $existingCartItem = CartItem::where(['cart_id' => $existingCart->id, 'product_variation_id' => $variation->id])->first();

            if ($existingCartItem){
                $cartItems = $existingCartItem->update(['quantity' => $existingCartItem->quantity + 1]);
            }else{
                $cartItems = CartItem::create([
                    'cart_id' => $existingCart->id,
                    'product_id' => $product->id,
                    'product_variation_id' => $variation->id,
                    'price' => $price,
                ]);
            }
        }else{
            $cart = Cart::create([
                'product_id' => $product->id,
                'user_id' => auth()->user()->id,
            ]);
            $cartItems = CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'product_variation_id' => $variation->id,
                'price' => $price,
            ]);
        }


        if ($cartItems){
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

    public function update(CartItem $item, $type){
        if ($type == 'increase'){
            $status = $item->update(['quantity' => ($item->quantity + 1)]);
        }
        else
        {
            if ($item->quantity != 1){
                $status = $item->update(['quantity' => $item->quantity - 1]);
            }else{
                $status = '';
            }
        }
        if ($status){
            request()->session()->flash('success', 'Cart Update successfully');
        }
        else
        {
            request()->session()->flash('error', 'Failed, Try again!');
        }

        return back();
    }
}
