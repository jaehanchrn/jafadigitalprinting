<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlatTulisController extends Controller
{
    //
    public function beranda()
    {
        $products = Product::all(); // Misalnya mengambil semua produk dari model Product

        return view('produk.alat-tulis', compact('products'));
    }
}
