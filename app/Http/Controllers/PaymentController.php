<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getToken($id)
    {
        $item = Penjualan::find($id);
        $user = User::find($item->id_user);

        /*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
        composer require midtrans/midtrans-php
                                    
        Alternatively, if you are not using **Composer**, you can download midtrans-php library 
        (https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
        the file manually.   

        require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                // 'order_id' => $item->id,
                'order_id' => rand(),
                'gross_amount' => $item->harga_total,
            ),
            'item_details' => array(
                [
                    'id' => $item->id_tiket,
                    'name' => $item->tiket->wahana->nama,
                    'quantity' => $item->jumlah,
                    'price' => $item->tiket->harga,
                ],
            ),
            'customer_details' => array(
                'first_name' => $user->name,
                'email' => $user->email,
                // 'phone' => $user->,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return $snapToken;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Penjualan::find($id);
        $encodeServerKey = base64_encode(env('MIDTRANS_SERVER_KEY'));
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' .$encodeServerKey,
        ])
        ->withUrlParameters([
            'endpoint' => 'https://api.sandbox.midtrans.com/v2',
            'order_id' => $item->order_id,
            'topic' => 'status',
        ])->get('{+endpoint}/{order_id}/{topic}');

        $data = $response->json();

        return view('frontend.buktiPembayaran.show', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Penjualan::find($id);
        if($item){
            $item->update([
                'status' => 'Selesai',
                'order_id' => $data['order_id'],
                'transaction_id' => $data['transaction_id'],
            ]);
            return response()->json(['status' => 'Berhasil', 'message' => 'Pembayaran Berhasil !!', 'data' => $data], 200);
        }else{
            return response()->json(['status' => 'Gagal','message' => 'Orderan Tidak Ditemukan !!', 'data' => $data], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
