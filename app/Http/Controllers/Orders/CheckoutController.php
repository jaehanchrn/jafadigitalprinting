<?php

namespace App\Http\Controllers\Orders;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Checkout;
use App\Models\OrderItem;
use App\Models\Pricelist;
use App\Models\AddressUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Orders\CheckoutRequest;

class CheckoutController extends Controller
{
    private function shipping_cost($address)
    {
        // Implementasikan logika perhitungan ongkos kirim di sini
        return 10000; // Contoh tarif flat
    }

    private function generateInvoiceNumber()
    {
        $prefix = "INV";
        $date = date('dmy'); // Current date in YYYYMMDD format
        $latestOrder = Order::latest()->first();
        
        if ($latestOrder) {
            $lastNumber = (int)substr($latestOrder->no_invoice, -4);
            $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $newNumber = "0001";
        }

        return $prefix . '/' . $date . '/' . $newNumber;
    }

    public function indexAddress()
    {
        // Retrieve the current user's cart with associated products
        $cart = Cart::where('user_id', Auth::id())->with('items.product')->first();
        $total_price_product = session('total_price_product');
        $total_price_order = session('total_price_order');
        $shipping_cost = session('shipping_cost');

        if (!$cart) {
            return redirect()->route('cart.view')->with('error', 'Cart is empty');
        }

        // Example shipping cost calculation (you can adjust this as needed)
        $shipping_cost = $this->shipping_cost('address'); // Example shipping cost

        return view('checkout.step1-checkout', [
            'total_price_product' => $total_price_product,
            'shipping_cost' => $shipping_cost,
            'total_price_order' => $total_price_order,
        ]);
    }

    public function form()
    {
        // Assuming you pass some data to the view, for example:
        $pricelists = \App\Models\Pricelist::all();
        return view('checkout.form', [

            'pricelists' => $pricelists,
        ]);
    }

    public function saveAddress(Request $request)
    {
        // Your validation and saving logic here

        // Example:
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'address' => 'required|string',
            'pricelist_id' => 'required|exists:pricelists,id',
            'zip_code' => 'required|string'
        ]);

        \App\Models\AddressUser::create([
            'user_id' => $request->user_id,
            'address' => $request->address,
            'pricelist_id' => $request->pricelist_id,
            'zip_code' => $request->zip_code
        ]);

        return redirect()->route('checkout.address.index')->with('success', 'Address saved successfully');
    }

    public function selectAddress(Request $request)
    {
        $total_price_product = session('total_price_product');
        $total_price_order = session('total_price_order');
        $shipping_cost = session('shipping_cost');

        // Validate the selected address
        $validatedData = $request->validate([
            'address_id' => ['required', 'exists:address_users,id'], // Ensure address_id exists in address_users table
        ]);

        $address = AddressUser::findOrFail($validatedData['address_id']);
        $shipping_cost = $address->pricelist->price;
        $total_price_product = $request->input('total_price_product');
        $total_price_order = $request->input('total_price_order');
        // Store the selected address ID in session

        session([
            'selected_address_id' => $validatedData['address_id'],
            'shipping_cost' => $shipping_cost,
            'total_price_product' => $total_price_product,
            'total_price_order' => $total_price_order,
        ]);

        // Redirect to step 2 (payment confirmation)
        return redirect()->route('checkout.payment', [
            'selected_address_id' => $address,
            'total_price_product' => $total_price_product,
            'total_price_order' => $total_price_order,
        ]);
    }


    public function indexPayment()
    {

        // Retrieve the current user's cart
        $cart = Cart::where('user_id', Auth::id())->with('items')->first();

        if (!$cart || $cart->items->isEmpty()) {
            // Redirect to the cart view if the cart is empty
            return redirect()->route('cart.view')->with('message', 'Keranjang Anda kosong, silakan tambahkan produk.');
        }
        // Retrieve necessary data from session
        $address_id = session('selected_address_id');
        $total_price_product = session('total_price_product');
        $shipping_cost = session('shipping_cost');
        $total_price_order =  session('total_price_order');


        return view('checkout.step2-checkout-payment', [
            'selected_address_id' => $address_id,
            'total_price_product' => $total_price_product,
            'total_price_order' => $total_price_order,
            'shipping_cost' => $shipping_cost,
        ]);
    }

    public function confirmPayment(Request $request)
    {
        // Validate the input data
        $request->validate([
            'total_price_product' => 'required|numeric',
            'shipping_cost' => 'required|numeric',
            'total_price_order' => 'required|numeric',
        ]);

        // Retrieve necessary data from session
        $total_price_product_session = session('total_price_product');
        $shipping_cost_session = session('shipping_cost');
        $total_price_order_session = session('total_price_order');

        // Check if the values match the session values
        if (
            $request->total_price_product != $total_price_product_session ||
            $request->shipping_cost != $shipping_cost_session ||
            $request->total_price_order != $total_price_order_session
        ) {
            return back()->with(['error' => 'Data mismatch detected. Please review your order and try again.']);
        }

        // Process upload file and save to storage
        if ($request->hasFile('payment_proof')) {
            $file = $request->file('payment_proof');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->store('payment_confirmation', 'public');

            $invoiceNumber = $this->generateInvoiceNumber();

            // Save payment confirmation to the database (for example, using Order model)
            $order = new Order();
            $order->user_id = $request->user_id;
            $order->no_invoice = $invoiceNumber;
            $order->address_id = $request->address_id;
            $order->shipping_cost = $request->shipping_cost;
            $order->total_price_product = $request->total_price_product;
            $order->total_price_order = $request->total_price_order;
            $order->payment_confirmation_image = $filePath;
            $order->status = 'Proses Verifikasi';
            // Save order to the database
            $order->save();

            // Retrieve products from the cart
            $cart = Cart::where('user_id', Auth::id())->first();

            if ($cart) {
                foreach ($cart->items as $item) {
                    if ($item->product) {
                        OrderItem::create([
                            'order_id' => $order->id,
                            'product_id' => $item->product_id,
                            'quantity' => $item->quantity,
                            'price' => $item->product->price,
                        ]);
                    } elseif ($item->service) {
                        OrderItem::create([
                            'order_id' => $order->id,
                            'service_id' => $item->service_id,
                            'quantity' => $item->quantity,
                            'price' => $item->service->price,
                        ]);
                    }
                }
        
                // Clear the cart
                $cart->items()->delete();
            }

            // Redirect to success page or order summary page
            return redirect()->route('beranda.index')->with('success', 'Payment confirmed successfully.');
        }

        // If an error occurs during payment processing
        return back()->withErrors(['error' => 'Failed to process payment confirmation']);
    }
}
