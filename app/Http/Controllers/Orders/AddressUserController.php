<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Address; // Add this line to import the Address model
use App\Models\AddressUser;
use Illuminate\Http\Request;

class AddressUserController extends Controller
{
    public function destroy($id)
{
    $address = AddressUser::findOrFail($id);

    if ($address->user_id === auth()->id()) {
        $address->delete();
        return redirect()->route('checkout.address.form')->with('success', 'Alamat berhasil dihapus.');
    }

    return redirect()->route('checkout.address.form')->with('error', 'Anda tidak memiliki hak untuk menghapus alamat ini.');
}

    
}
