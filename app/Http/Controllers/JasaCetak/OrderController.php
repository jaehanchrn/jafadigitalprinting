<?php

namespace App\Http\Controllers\JasaCetak;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\JasaCetak\StoreOrderRequest;

class OrderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::all();
        return view('produk3_jasacetak_photo', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(StoreOrderRequest $request)
    {
        // Handle file upload
        $filePath = $request->file('file')->store('uploads', 'public');

        // Create the order
        $order = Order::create([
            'user_id' => Auth::id(),
            'size' => $request->input('size'),
            'paper_type' => $request->input('paper_type'),
            'quantity' => $request->input('quantity'),
            'file_path' => $filePath,
            'notes' => $request->input('notes'),
            'total_price_product' => $request->input('total_price_product'),
        ]);

        return redirect()->route('orders.index')->with('success', 'Order created successfully');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }
}
