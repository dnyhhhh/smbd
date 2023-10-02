<?php

namespace App\Http\Controllers;

use App\Models\Tabel;
use Illuminate\Http\Request;


class TabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabel = Tabel::all(); // Ubah $tabel menjadi $tabels

        return view('layout_tabel', compact('tabel'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_tabel');
    }



    /**
     * Store a newly created resource in storage.
     */
    /**
 * Store a newly created resource in storage.
 */
    public function store(Request $request)
    {
        $request->validate([
            'id_tomat' => 'required|unique:pengamatan',
            'berat' => 'required',
            'gas' => 'required',
            'suhu' => 'required',
        ]);
        
        $tabel = new Tabel([
            'id_tomat' => $request->id_tomat,
            'berat' => $request->berat,
            'gas' => $request->gas,
            'suhu' => $request->suhu,
        ]);

        $tabel->save();

        // Mengambil data tabel setelah ditambahkan
        $tabels = Tabel::all(); // Ubah $tabel menjadi $tabels

        // Mengirim data tabel ke tampilan layout_tabel.blade.php
        return redirect()->route('layout-table')->with('success', 'Data berhasil ditambahkan.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tabel = Tabel::find($id);
        return view('edit_tabel', compact('tabel'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'berat' => 'required',
        'gas' => 'required',
        'suhu' => 'required',
    ]);

    // Temukan data dengan ID yang sesuai
    $tabel = Tabel::find($id);

    if (!$tabel) {
        return redirect()->route('tabel.index')->with('error', 'Data tidak ditemukan.');
    }

    // Perbarui data dengan nilai-nilai yang baru
    $tabel->berat = $request->berat;
    $tabel->gas = $request->gas;
    $tabel->suhu = $request->suhu;
    $tabel->save();

    return redirect()->route('tabel.index')->with('success', 'Berhasil memperbarui data');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tabel::where('id_tomat', $id)->delete();
        
        return redirect()->route('layout-table')->with('success', 'Berhasil menghapus data');

    }
}
