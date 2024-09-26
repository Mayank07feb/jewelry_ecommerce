<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class OrderController extends Controller
{
    public function placeOrder(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'pincode' => 'required',
            'country' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'phone' => 'required',
        ]);

        $cartIds = Cart::where('user_id', auth()->user()->id)->pluck('id');
        $items = CartItem::whereIn('cart_id', $cartIds)->get();

        $totalAmount = 0;
        foreach ($items as $item){
            $totalAmount += $item->price * $item->quantity;
        }

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'sub_total' => $totalAmount,
            'total_amount' => $totalAmount,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'pincode' => $request->pincode,
            'country' => $request->country,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'phone' => $request->phone,
        ]);

        $order->update(['order_number' => 'ORD-' . str_pad($order->id, 8, '0', STR_PAD_LEFT),]);

        foreach ($items as $item){
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product->id,
                'product_variation_id' => $item->variation->id,
                'quantity' => $item->quantity,
                'price' => $item->price,
            ]);
        }
        Cart::whereIn('id', $cartIds)->delete();

        return view('frontend.thank-you');
    }
}
