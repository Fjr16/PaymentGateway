<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Header;
use App\Models\Penjualan;
use App\Models\Tiket;
use App\Models\Wahana;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::latest()->first();
        $about = About::latest()->first();
        $contact = Contact::latest()->first();
        $wahanas = Wahana::orderBy('id', 'DESC')->get();
        $tikets = Tiket::orderBy('id', 'ASC')->get();
        return view('frontend.index', [
            'about' => $about,
            'header' => $header,
            'contact' => $contact,
            'wahanas' => $wahanas,
            'tikets' => $tikets,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pesananSaya()
    {
        $user = auth()->user();
        $header = Header::latest()->first();
        $pesanans = Penjualan::where('id_user', $user->id)->orderBy('id', 'DESC')->get();
        return view('frontend.pesanan', [
            'pesanans' => $pesanans,
            'header' => $header,
        ]);
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
    public function pesanTiket(Request $request, $id)
    {
        $data = Tiket::find($id);
        request()->validate([
            'jumlah' => 'required',
        ]);

        $hargaTotal = $request->jumlah * $data->harga;
        $user = auth()->user();
        // dd($hargaTotal);
        Penjualan::create([
            'jumlah' => $request->jumlah,
            'id_tiket' => $data->id,
            'id_user' => $user->id,
            'harga_total' => $hargaTotal,
            'status' => 'Dipesan',
        ]);

        return redirect()->route('pesanan.saya')
            ->with('success', 'Paket berhasil dipesan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function etiket($id)
    {
        $data = Penjualan::find($id);
        return view('frontend.etiket', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buktiPembayaran(Request $request, $id)
    {

        $data = Penjualan::find($id);

        // Melakukan Validasi Data
        $this->validate($request, [
            'bukti_pembayaran' => 'image|mimes:jpeg,png,jpg,svg|max:3072'
        ]);

        $foto = $request->file('bukti_pembayaran');

        //upload image
        $foto->storeAs('/gambar/bukti-pembayaran/', $foto->hashName());

        $data->update([
            'status' => 'Diproses',
            'bukti_pembayaran'     => $foto->hashName(),
        ]);

        return redirect()->route('pesanan.saya')->with(['success' => 'Bukti Pembayaran Berhasil Diupload']);
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
