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
            if ($item->product) {
                return $item->product->price * $item->quantity;
            } elseif ($item->service) {
                return $item->service->price * $item->quantity;
            }
            return 0;
        });

        return view('checkout.keranjang', [
            'cart' => $cart,
            'total_price_product' => $total_price_product
        ]);
    }

    public function deleteItem($id)
<<<<<<< HEAD
    {
        // Find the item in the cart
        $cartItem = CartItem::findOrFail($id);

        // Check if it's a service item and delete associated service if exists
        if ($cartItem->service_id) {
            $cartItem->service()->delete(); // Assuming you have a 'service' relationship defined in CartItem model
        }

        // Delete the cart item
        $cartItem->delete();

        return redirect()->back()->with('success', 'Item deleted from cart successfully.');
    }

    public function addJasaCetakToCart(Request $request)
    {
        $validated = $request->validate([
            'size' => 'required|string',
            'paper_type' => 'required|string',
            'quantity' => 'required|integer|min:1', // Correct usage of min validation rule
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:10240',
            'notes' => 'nullable|string',
            'total_price_product' => 'required|numeric',
        ]);
=======
{
    // Lakukan proses penghapusan item berdasarkan $id
    // Contoh:
    $item = CartItem::find($id);
    if (!$item) {
        return response()->json(['message' => 'Item tidak ditemukan'], 404);
    }

    $item->delete();

    return response()->json(['message' => 'Item berhasil dihapus']);
}

>>>>>>> origin/main


        $cartItem = new CartItem();
        $cartItem->cart_id = auth()->user()->id; // or session ID if not logged in
        $cartItem->product_id = null; // null because it's a service, adjust as necessary
        $cartItem->quantity = $validated['quantity'];
        $cartItem->size = $validated['size'];
        $cartItem->paper_type = $validated['paper_type'];
        $cartItem->notes = $validated['notes'];
        $cartItem->total_price = $validated['total_price_product'];

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('public/jasa-cetak'); // Adjust the storage path as needed
            $cartItem->file_path = $path;
        }

        $cartItem->save();

        return redirect()->back()->with('success', 'Jasa cetak berhasil ditambahkan ke keranjang!');
    }
}