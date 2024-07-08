<?php

namespace App\Http\Controllers\Orders;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Orders\AddToCartRequest;

class CartController extends Controller
{
    public function addToCart(AddToCartRequest  $request)
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
        $product = Product::find($request->product_id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $cartItem = CartItem::updateOrCreate(
            ['cart_id' => $cart->id, 'product_id' => $product->id],
            ['quantity' => $request->quantity]
        );

        return redirect()->route('cart.view')->with(['success' => 'Product added to cart', 'cartItem' => $cartItem]);
    }

    public function viewCart()
    {
        $cart = Cart::where('user_id', Auth::id())->with('items.product')->first();



        if (!$cart) {
            return view('checkout.keranjang', ['cart' => null, 'total_price_product' => 0]);
        }

        $total_price_product = $cart->items->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('checkout.keranjang', [
            'cart' => $cart, 
            'total_price_product' => $total_price_product
        ]);
    }







    //
    // public function addToCart(Request $request, $id)
    // {
    //     // Check if the user is authenticated
    //     if (!Auth::check()) {
    //         return redirect()->route('login')->with('error', 'You need to log in first.');
    //     }

    //     // Find the product by ID
    //     $product = Product::find($id);

    //     // Check if the product exists
    //     if (!$product) {
    //         Log::error('Product not found: ' . $id);
    //         return redirect()->back()->with('error', 'Product not found.');
    //     }

    //     // Check if the product is already in the cart for the authenticated user
    //     $cart = Cart::where('user_id', Auth::id())
    //                 ->where('product_id', $id)
    //                 ->first();

    //     if ($cart) {
    //         // Increment the quantity if the product is already in the cart
    //         $cart->quantity++;
    //         $cart->save();
    //         Log::info('Incremented quantity for product in cart', ['user_id' => Auth::id(), 'product_id' => $id, 'quantity' => $cart->quantity]);
    //     } else {
    //         // Create a new cart item if the product is not in the cart
    //         Cart::create([
    //             'user_id' => Auth::id(),
    //             'product_id' => $id,
    //             'quantity' => 1,
    //         ]);
    //         Log::info('Added product to cart', ['user_id' => Auth::id(), 'product_id' => $id]);
    //     }

    //     return redirect()->route('cart.view')->with('success', 'Product added to cart!');
    // }

    // public function viewCart()
    // {
    //     $cartItems = Cart::where('user_id', Auth::id())
    //                     ->with('product') // Ensure the product relationship is loaded
    //                     ->get();

    //     $total_price_product = $cartItems->reduce(function ($carry, $item) {
    //         return $carry + ($item->product->price * $item->quantity);
    //     }, 0);

    //     return view('checkout.keranjang', compact('cartItems', 'total_price_product'));
    // }

    // public function checkout()
    // {
    //     // Clear the cart for the authenticated user
    //     Cart::where('user_id', Auth::id())->delete();
    //     return redirect()->route('cart.view')->with('success', 'Checkout successful!');
    // }




}
