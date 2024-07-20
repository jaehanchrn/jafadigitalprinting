<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit()
    {
        return view('profil.edit-profil');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'namalengkap' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
        ]);

        $user->namalengkap = $request->namalengkap;
        $user->nomor_telepon = $request->nomor_telepon;
        $user->save();

        return redirect()->route('profil.edit')->with('success', 'Profil berhasil diperbarui');
    }
}
