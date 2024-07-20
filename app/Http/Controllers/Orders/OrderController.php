<?php

namespace App\Http\Controllers\Orders;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //AKSES ADMIN
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::all();
        return view('profil.pesanan', compact('orders'));
    }
    public function showDetail($id)
    {
        $order = Order::with(['items.product', 'items.service', 'addressUser'])->findOrFail($id);

        return view('profil.riwayat-pesanan-detail', compact('order'));
    }
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->route('pesanan.index')->with('success', 'Order status updated successfully');
    }


    // AKSES USER PENGGUNA
    public function indexOrderHistory()
    {
        $orders = Order::where('user_id', Auth::id())
            ->with(['items.product', 'items.service', 'addressUser'])
            ->get();

        return view('profil.riwayat-pesanan', compact('orders'));
    }

    public function indexOrderHistoryDetail($id)
    {
        $order = Order::where('user_id', Auth::id())
            ->with(['items.product', 'items.service', 'addressUser'])
            ->findOrFail($id);

        return view('profil.riwayat-pesanan-detail', compact('order'));
    }

    public function cancelOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Pesanan Dibatalkan';
        $order->save();

        return redirect()->route('pesanan.index.history')
            ->with('success', 'Pesanan berhasil dibatalkan');
    }

}
