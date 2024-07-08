<?php

namespace App\Http\Controllers\Orders;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function createOrder(Request $request)
    {
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->first();
        
        if(!$cart) {
            return redirect()->route('cart.show')->with('error', 'Cart is empty.');
        }

        $paymentMethod = PaymentMethod::find($request->payment_method_id);

        $order = Order::create([
            'user_id' => $user->id,
            'payment_method_id' => $paymentMethod->id,
            'total_amount' => $cart->items()->sum('price'),
            'status' => 'completed'
        ]);

        // Clear the cart
        $cart->items()->delete();
        $cart->delete();

        return redirect()->route('orders.show', $order->id)->with('success', 'Order completed.');
    }

    public function showOrder($orderId)
    {
        $order = Order::find($orderId);

        return view('orders.show', compact('order'));
    }
}
