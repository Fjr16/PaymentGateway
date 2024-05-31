<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('api/pembayaran/getToken/{id}',[PaymentController::class, 'getToken'])->name('api/pembayaran.getToken');
Route::post('api/pembayaran/update/{id}',[PaymentController::class, 'update'])->name('api/pembayaran.update');
// Route::post('api/pembayaran/update',[PaymentController::class, 'update'])->name('api/pembayaran.update');
Route::get('api/pembayaran/transaction/show/{id}',[PaymentController::class, 'show'])->name('api/pembayaran/transaction.show');
