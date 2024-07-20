<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;

class PasswordController extends Controller
{
<<<<<<< HEAD
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request)
    {
        $request->validate([
=======
    public function update(Request $request)
    {
        $request->validate([
            'old_password' => ['required', new MatchOldPassword],
>>>>>>> origin/main
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = auth()->user();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password berhasil diubah!');
    }
}
