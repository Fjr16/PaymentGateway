<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WahanaController;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('gambar/{folder}/{filename}', function ($folder, $filename) {
    $path = storage_path('app/gambar/' . $folder . '/' . $filename);

    if (!file_exists($path)) {
        abort(500);
    }

    $file = file_get_contents($path);
    $type = mime_content_type($path);

    return response($file)->header('Content-Type', $type);
})->name('show-gambar');

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('pesan-tiket/{id}', [FrontendController::class, 'pesanTiket'])->name('pesan.tiket');
Route::get('pesanan/saya', [FrontendController::class, 'pesananSaya'])->name('pesanan.saya');
Route::patch('bukti/pembayaran/{id}', [FrontendController::class, 'buktiPembayaran'])->name('bukti.pembayaran');
Route::get('e-tiket/{id}', [FrontendController::class, 'etiket'])->name('etiket');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'role:admin'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');
    // Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');

    // About
    Route::get('data/about', [AboutController::class, 'index'])->name('about');
    Route::get('data/about/create', [AboutController::class, 'create'])->name('about.create');
    Route::get('data/about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::patch('data/about/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::post('data/about/store', [AboutController::class, 'store'])->name('about.store');
    Route::delete('data/about/destroy/{id}', [AboutController::class, 'destroy'])->name('about.destroy');

    // contact
    Route::get('data/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('data/contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::get('data/contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::patch('data/contact/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::post('data/contact/store', [ContactController::class, 'store'])->name('contact.store');
    Route::delete('data/contact/destroy/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    // header
    Route::get('data/header', [HeaderController::class, 'index'])->name('header');
    Route::get('data/header/create', [HeaderController::class, 'create'])->name('header.create');
    Route::get('data/header/edit/{id}', [HeaderController::class, 'edit'])->name('header.edit');
    Route::patch('data/header/{id}', [HeaderController::class, 'update'])->name('header.update');
    Route::post('data/header/store', [HeaderController::class, 'store'])->name('header.store');
    Route::delete('data/header/destroy/{id}', [HeaderController::class, 'destroy'])->name('header.destroy');

    // tiket
    Route::get('data/tiket', [TiketController::class, 'index'])->name('tiket');
    Route::get('data/tiket/create', [TiketController::class, 'create'])->name('tiket.create');
    Route::get('data/tiket/edit/{id}', [TiketController::class, 'edit'])->name('tiket.edit');
    Route::patch('data/tiket/{id}', [TiketController::class, 'update'])->name('tiket.update');
    Route::post('data/tiket/store', [TiketController::class, 'store'])->name('tiket.store');
    Route::delete('data/tiket/destroy/{id}', [TiketController::class, 'destroy'])->name('tiket.destroy');

    // Wahana
    Route::get('data/wahana', [WahanaController::class, 'index'])->name('wahana');
    Route::get('data/wahana/create', [WahanaController::class, 'create'])->name('wahana.create');
    Route::get('data/wahana/edit/{id}', [WahanaController::class, 'edit'])->name('wahana.edit');
    Route::patch('data/wahana/{id}', [WahanaController::class, 'update'])->name('wahana.update');
    Route::post('data/wahana/store', [WahanaController::class, 'store'])->name('wahana.store');
    Route::delete('data/wahana/destroy/{id}', [WahanaController::class, 'destroy'])->name('wahana.destroy');

    // User
    Route::get('data/user', [UserController::class, 'index'])->name('user');
    Route::delete('data/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    // Penjualan
    Route::get('data/penjualan', [PenjualanController::class, 'index'])->name('penjualan');
    Route::get('data/penjualan/konfirmasi/{id}', [PenjualanController::class, 'konfirmasi'])->name('penjualan.konfirmasi');
    Route::get('data/penjualan/cetak', [PenjualanController::class, 'cetak'])->name('penjualan.cetak');
    Route::delete('data/penjualan/destroy/{id}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy');
});
