<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('profil.daftar-akun', [
            "title" => "Website Komisi | Daftar",
            "active" => "Daftar Akun",
        ]);
    }
    public function register(RegisterRequest $request)
    {
         // dapatkan dulu request dari form request
        // tambahkan password dengan method bcrypt / hash password 
        // tambahkan picture dummy sesuai dengan usernamenya 
        // create user berdasarkan request yg sudah tervalidasi dan yg sudah kita proses
        // jika create berhasil maka loginkan user lalu redirect ke list discussion
        // jika tidak berhasil maka return 500
        

        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);

        $create = User::create($validated);

        if ($create) {
            Auth::login($create);
            return redirect()->route('beranda.index');
        }

        return abort(500);
    }
}
