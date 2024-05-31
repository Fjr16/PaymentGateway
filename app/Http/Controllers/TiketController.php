<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Models\Wahana;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tikets = Tiket::orderBy('id', 'DESC')->get();
        return view('admin.tiket.index', [
            'tikets' => $tikets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wahanas = Wahana::orderBy('id', 'DESC')->get();
        return view('admin.tiket.create', [
            'wahanas' => $wahanas
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
        request()->validate([
            'id_wahana' => 'required',
            'judul' => 'required',
            'harga' => 'required',
        ]);

        Tiket::create($request->all());

        return redirect()->route('tiket')
            ->with('success', 'Tiket created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function show(Tiket $tiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wahanas = Wahana::orderBy('id', 'DESC')->get();
        $tiket = Tiket::find($id);
        return view('admin.tiket.edit', [
            'tiket' => $tiket,
            'wahanas' => $wahanas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        request()->validate([
            'id_wahana' => 'required',
            'judul' => 'required',
            'harga' => 'required',
        ]);


        $data = [
            'id_wahana' => $request->id_wahana,
            'judul' => $request->judul,
            'harga' => $request->harga,
        ];

        Tiket::find($id)->update($data);

        return redirect()->route('tiket')
            ->with('success', 'Tiket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tiket::find($id)->delete();

        return redirect()->route('tiket')
            ->with('success', 'Tiket deleted successfully');
    }
}
