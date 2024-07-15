<?php

use App\Models\Product\AlatTulis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Orders\CartController;
use App\Http\Controllers\JasaCetak\OrderController;
use App\Http\Controllers\Orders\CheckoutController;
use App\Http\Controllers\Product\AlatTulisController;
use App\Http\Controllers\Product\JasaTulisController;
use App\Http\Controllers\Orders\AddressUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//akun

Route::namespace('App\Http\Controllers\Auth')->group(function () {
    Route::get('profil.login-akun', 'LoginController@index')->name('auth.masuk.index');
    Route::post('profil.login-akun', 'LoginController@login')->name('auth.masuk.login');
    Route::get('profil.logout-akun', 'LoginController@index')->name('auth.keluar.index');
    Route::post('profil.logout-akun', 'LoginController@logout')->name('auth.keluar.logout');
    Route::get('profil.daftar_akun', 'RegisterController@index')->name('auth.daftar.index');
    Route::post('profil.daftar_akun', 'RegisterController@register')->name('auth.daftar.register');
});


//TIDAK TAHU

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'HomeController@index')->name('beranda.index');
    Route::get('beranda', 'HomeController@index')->name('beranda.index');
});

Route::middleware(['auth'])->group(function () {

    Route::prefix('alat-tulis')->group(function () {
        Route::get('/', [AlatTulisController::class, 'beranda'])->name('alat-tulis.index');
        Route::post('/create', [AlatTulisController::class, 'beranda'])->name('alat-tulis.index');
    });

    Route::get('/orders', [OrderController::class, 'beranda'])->name('orders.index');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');



    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'viewCart'])->name('cart.view');
        Route::post('add/{id}', [CartController::class, 'addToCart'])->name('cart.addToCart');
    
        Route::prefix('checkout')->group(function () {
            Route::get('address', [CheckoutController::class, 'indexAddress'])->name('checkout.address.index');
            Route::get('address/form', [CheckoutController::class, 'form'])->name('checkout.address.form');
            Route::post('address/form/save', [CheckoutController::class, 'saveAddress'])->name('checkout.address.form.save');
            Route::post('address/select-address', [CheckoutController::class, 'selectAddress'])->name('checkout.address.select');
            
            Route::get('payment', [CheckoutController::class, 'indexPayment'])->name('checkout.payment');
            Route::post('payment/confirm', [CheckoutController::class, 'confirmPayment'])->name('checkout.payment.confirm');
        });
    });

    // Route::post('orders/create', [OrderController::class, 'createOrder'])->name('orders.create');
    // Route::get('orders/{orderId}', [OrderController::class, 'showOrder'])->name('orders.show');
});

Route::get('/daftar-akun', function () {
    return view('profil.daftar-akun');
});

Route::get('/login-akun', function () {
    return view('profil.login-akun');
});

Route::get('/logout-akun', function () {
    return view('profil.logout-akun');
});



//produk dan jasa   
Route::get('/jasa-ketik', function () {
    return view('produk.jasa-ketik');
});


Route::get('/jasa-cetak', function () {
    return view('produk.jasa-cetak');
});

//profil

Route::get('/profil/edit', [UserController::class, 'edit'])->name('profil.edit');
Route::post('/profil/update', [UserController::class, 'update'])->name('profil.update');

Route::get('/ubah-password', function () {
    return view('profil.ubah-password');
});

Route::get('/riwayat-pesanan', function () {
    return view('profil.riwayat-pesanan');
});

Route::get('/pesanan-pelanggan', function () {
    return view('profil.pesanan-pelanggan');
});



//header

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('beranda', 'HomeController@index')->name('beranda.index');
});

Route::get('/caraorder', function () {
    return view('caraorder');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});



//cart pesanan dan order




Route::get('/detailpesanan', function () {
    return view('detailpesanan');
});

Route::get('/jarakantar', function () {
    return view('jarakantar');
});
