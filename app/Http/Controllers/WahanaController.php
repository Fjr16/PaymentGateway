<?php

namespace App\Http\Controllers;

use App\Models\Wahana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WahanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wahanas = Wahana::orderBy('id', 'DESC')->get();
        return view('admin.wahana.index', [
            'wahanas' => $wahanas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wahana.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Melakukan Validasi Data
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        $nama = $request->input('nama');
        $deskripsi = $request->input('deskripsi');
        $foto = $request->file('foto');

        //upload image
        $foto->storeAs('/gambar/wahana/', $foto->hashName());


        Wahana::create([
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'foto'     => $foto->hashName(),
        ]);
        //redirect to index
        return redirect()->route('wahana')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wahana  $wahana
     * @return \Illuminate\Http\Response
     */
    public function show(Wahana $wahana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wahana  $wahana
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wahana = Wahana::find($id);
        return view('admin.wahana.edit', [
            'wahana' => $wahana
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wahana  $wahana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data = Wahana::find($id);

        // Melakukan Validasi Data
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        $nama = $request->input('nama');
        $deskripsi = $request->input('deskripsi');
        $foto = $request->file('foto');

        if ($foto) {
            //upload image
            $foto->storeAs('/gambar/wahana/', $foto->hashName());

            // Hapus Gambar lama
            Storage::exists('/gambar/wahana/' . $data->foto);
            Storage::delete('/gambar/wahana/' . $data->foto);

            $data->update([
                'nama' => $nama,
                'deskripsi' => $deskripsi,
                'foto'     => $foto->hashName(),
            ]);
        } else {
            $data->update([
                'nama' => $nama,
                'deskripsi' => $deskripsi,
            ]);
        }
        return redirect()->route('wahana')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wahana  $wahana
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Wahana::find($id);

        // Hapus Gambar lama
        Storage::exists('/gambar/wahana/' . $data->foto);
        Storage::delete('/gambar/wahana/' . $data->foto);

        // Hapus modul dari database
        $data->delete();

        return redirect()->route('wahana')
            ->with('success', 'Wahana deleted successfully');
    }
}
