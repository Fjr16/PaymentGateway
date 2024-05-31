<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualans = Penjualan::orderBy('id', 'DESC')->get();
        return view('admin.penjualan.index', [
            'penjualans' => $penjualans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cetak()
    {
        $penjualans = Penjualan::orderBy('id', 'DESC')->get();
        return view('admin.penjualan.cetak', [
            'penjualans' => $penjualans
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
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function konfirmasi($id)
    {
        $data = Penjualan::find($id);
        $data->update([
            'status' => 'Selesai'
        ]);
        return redirect()->route('penjualan')->with(['success' => 'Status Berhasil Diupdate!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penjualan::find($id)->delete();
        return redirect()->route('penjualan')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
