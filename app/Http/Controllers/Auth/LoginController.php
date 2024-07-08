<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function index(){
        return view('profil.login-akun');
    }

    public function login(LoginRequest $request){
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            return redirect()->route('beranda.index');
        }

        return redirect()->back()->withInput()
            ->withErrors(['credentials' => 'The email or password is incorrect']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('beranda.index');
    }
}
