<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class JasaCetakController extends Controller
{
    public function indexFoto()
    {
        return view('produk.1-jasa-cetak-foto',[
            "dropdown_aktif" => "Cetak Foto",
        ]);
        
    }

    public function indexSertifikat()
    {
        return view('produk.2-jasa-cetak-sertifikat',[
            "dropdown_aktif" => "Cetak Sertifikat",
        ]);
    }
    public function indexKartuNama()
    {
        return view('produk.3-jasa-cetak-kartu-nama',[
            "dropdown_aktif" => "Cetak Kartu Nama",
        ]);
    }

    public function addJasaCetakToCart(Request $request)
    {
        $user = auth()->user();
        // Create or retrieve the cart for the user
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        if (!$cart) {
            $cart = new Cart();
            $cart->save();
        }

        $validated = $request->validate([
            'print_type' => 'required|string',
            'size' => 'required|string',
            'paper_type' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'print_images' => 'required|image', // Adjust as needed for file upload
        ]);

        $price = floatval(str_replace('.', '', str_replace('Rp ', '', $request->price)));

        $jasa = new Service();
        $jasa->print_type = $validated['print_type'];
        $jasa->size = $validated['size'];
        $jasa->paper_type = $validated['paper_type'];
        $jasa->quantity = $validated['quantity'];
        $jasa->price = $price;
        $jasa->print_images = $request->file('print_images')->store('print_images', 'public');
        $jasa->save();

        // Associate the service with the user's cart
        $cartItem = new CartItem();
        $cartItem->cart_id = $cart->id; // Ensure to set the cart_id here
        $cartItem->service_id = $jasa->id; // Assuming you have a service_id in CartItem
        $cartItem->quantity = $jasa->quantity;
        // Use the price from the service
        $cartItem->save();

        return redirect()->back()->with('success', 'Jasa cetak berhasil ditambahkan ke keranjang!');
    }



    public function viewCart()
    {
        $user = Auth::user();
        $cart = $user->cart;

        return view('checkout.keranjang', compact('cart'));
    }

    public function deleteItem($id)
    {
        $user = Auth::user();
        $cart = $user->cart;
        $cart->jasaItems()->where('id', $id)->delete();

        return redirect()->route('cart.view')->with('success', 'Item berhasil dihapus dari keranjang.');
    }
}
