<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraans = \App\Models\Kendaraan::all(); 

    // 2. Kirim variabel ke view 'index'
    return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'nama_pemilik' => 'required',
        'plat_nomor'   => 'required',
        'merk_kendaraan' => 'required',
        'keluhan'      => 'required',
    ]);

    // 2. Simpan ke Database
    // Ini bekerja karena Anda sudah mengatur $fillable di Model (Poin 2)
    \App\Models\Kendaraan::create($request->all());

    // 3. Redirect (Instruksi: arahkan kembali ke halaman Daftar Servis)
    return redirect()->route('kendaraan.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        //
    }
}
