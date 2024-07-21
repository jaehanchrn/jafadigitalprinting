<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\JasaCetakController; // Updated Controller
use App\Http\Controllers\Orders\OrderController;
use App\Http\Controllers\Orders\CheckoutController;
use App\Http\Controllers\Orders\AddressUserController;
use App\Http\Controllers\Orders\CartController;
use App\Http\Controllers\Product\AlatTulisController;




Route::namespace('App\Http\Controllers\Auth')->group(function () {
    Route::get('profil.login-akun', 'LoginController@index')->name('auth.masuk.index');
    Route::post('profil.login-akun', 'LoginController@login')->name('auth.masuk.login');
    Route::get('profil.logout-akun', 'LoginController@index')->name('auth.keluar.index');
    Route::post('profil.logout-akun', 'LoginController@logout')->name('auth.keluar.logout');
    Route::get('profil.daftar_akun', 'RegisterController@index')->name('auth.daftar.index');
    Route::post('profil.daftar_akun', 'RegisterController@register')->name('auth.daftar.register');
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'HomeController@index')->name('beranda.index');
    Route::get('beranda', 'HomeController@index')->name('beranda.index');
});

Route::get('/jasa-cetak', 'App\Http\Controllers\JasaController@index')->name('jasa.index');

Route::middleware(['auth'])->group(function () {

    Route::get('/akun/pesanan', [OrderController::class, 'index'])->name('pesanan.index');
    Route::put('/akun/pesanan/update/{id}', [OrderController::class, 'update'])->name('pesanan.update');
    Route::get('/akun/pesanan/{id}', [OrderController::class, 'showDetail'])->name('pesanan.detail');


    Route::get('/akun/riwayat-pesanan', [OrderController::class, 'indexOrderHistory'])->name('pesanan.index.history');
    Route::get('/akun/riwayat-pesanan-detail/{id}', [OrderController::class, 'indexOrderHistoryDetail'])->name('pesanan.index.history.detail');
    Route::post('akun/riwayat-pesanan/{id}/cancel', [OrderController::class, 'cancelOrder'])
        ->name('order.cancel');


    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'viewCart'])->name('cart.view'); // Updated Route
        Route::post('add/{id}', [CartController::class, 'addToCart'])->name('cart.addToCart'); // Updated Route
        Route::get('/cart/delete/{id}', [CartController::class, 'deleteItem'])->name('cart.delete'); // Updated Route

        Route::delete('address/{id}', [AddressUserController::class, 'destroy'])->name('checkout.address.destroy');

        Route::prefix('checkout')->group(function () {
            Route::get('address', [CheckoutController::class, 'indexAddress'])->name('checkout.address.index');
            Route::get('address/form', [CheckoutController::class, 'form'])->name('checkout.address.form');
            Route::post('address/form/save', [CheckoutController::class, 'saveAddress'])->name('checkout.address.form.save');
            Route::post('address/select-address', [CheckoutController::class, 'selectAddress'])->name('checkout.address.select');
            Route::delete('address/{id}', [AddressUserController::class, 'destroy'])->name('checkout.address.destroy');
            Route::get('payment', [CheckoutController::class, 'indexPayment'])->name('checkout.payment');
            Route::post('payment/confirm', [CheckoutController::class, 'confirmPayment'])->name('checkout.payment.confirm');
        });
    });
});


Route::get('/jasa-cetak-foto', [JasaCetakController::class, 'indexFoto'])->name('jasa-cetak-foto.index'); // Updated Route
Route::get('/jasa-cetak-sertifikat', [JasaCetakController::class, 'indexSertifikat'])->name('jasa-cetak-sertifikat.index'); // Updated Route
Route::get('/jasa-cetak-kartu-nama', [JasaCetakController::class, 'indexKartuNama'])->name('jasa-cetak-kartu-nama.index'); // Updated Route

Route::post('/orders/jasaCetak/store', [JasaCetakController::class, 'addJasaCetakToCart'])->name('jasa-cetak.addToCart.store'); // Updated Route


Route::prefix('alat-tulis')->group(function () {
    Route::get('/', [AlatTulisController::class, 'beranda'])->name('alat-tulis.index');
    Route::post('/create', [AlatTulisController::class, 'beranda'])->name('alat-tulis.index');
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

Route::get('/jasa-ketik', function () {
    return view('produk.jasa-ketik');
});


Route::get('/ubah-password', function () {
    return view('profil.ubah-password');
})->name('password.edit');

Route::put('/password/update', [PasswordController::class, 'update'])->name('password.update');
Route::post('/password/update', [PasswordController::class, 'update'])->name('password.update');

Route::middleware('auth')->group(function () {
    Route::get('/profil/edit', [UserController::class, 'edit'])->name('profil.edit');
    Route::post('/profil/update', [UserController::class, 'update'])->name('profil.update');
    Route::post('/password/update', [PasswordController::class, 'update'])->name('password.update');
});

Route::get('/ubah-password', function () {
    return view('profil.ubah-password');
});



Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('beranda', 'HomeController@index')->name('beranda.index');
});

Route::get('/caraorder', function () {
    return view('caraorder');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});


Route::get('/jarakantar', function () {
    return view('jarakantar');
});
