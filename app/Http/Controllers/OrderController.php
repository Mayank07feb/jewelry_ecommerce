<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ReturnOrder;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;


class OrderController extends Controller
{

    public function index(){
        $orders = Order::orderBy('created_at', 'desc')->paginate(100);

        return view('backend.order.index', compact('orders'));
    }

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

        $order->update(['order_number' => 'ORD-' . date('Ymdis')]);

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

    public function orderStatus(Request $request, Order $order){
        $order->update(['status' => $request->status]);
        return back()->with('success', 'order '.$request->status . ' successfully');
    }

    public function returnForm(Order $order){
        return view('frontend.returnForm', compact('order'));
    }

    public function returnOrder(Request $request, Order $order){
        if ($order->status != 'delivered' || $order->is_returned) {
            return back()->with('error', 'Order cannot be returned.');
        }

        // Create return request
        ReturnOrder::create([
            'order_id' => $order->id,
            'user_id' => auth()->id(),
            'reason' => $request->reason,
        ]);

        $order->update(['is_returned' => true, 'return_requested_at' => now()]);
        return redirect('orderhistory')->with('success', 'Return request created successfully');
    }

    public function order_status(Request $request, Order $order){
        $order->update(['status' => $request->status]);
        return back()->with('success', 'Status changed successfully');
    }
}
