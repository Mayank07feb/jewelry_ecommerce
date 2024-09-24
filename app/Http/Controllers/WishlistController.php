<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function addToWishlist(Product $product){
        $wishlist = Wishlist::create([
            'product_id' => $product->id,
            'user_id' => auth()->user()->id,
        ]);
        if ($wishlist){
            request()->session()->flash('success', 'Add to wishlist successfully');
        }else{
            request()->session()->flash('error', 'Failed, Try again!');
        }
        return back();
    }
}
