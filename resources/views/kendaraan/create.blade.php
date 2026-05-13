@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Tambah Data Kendaraan</h4>
    </div>
    <div class="card-body">
        <!-- Action diarahkan ke route store -->
        <form action="{{ route('kendaraan.store') }}" method="POST">
            @csrf <!-- Wajib ada untuk keamanan Laravel -->

            <div class="mb-3">
                <label>Plat Nomor</label>
                <input type="text" name="plat_nomor" class="form-control" placeholder="BK 1234 XX">
            </div>

            <div class="mb-3">
                <label>Nama Pemilik</label>
                <input type="text" name="nama_pemilik" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Merk Kendaraan</label>
                <input type="text" name="merk_kendaraan" class="form-control" placeholder="Honda/Yamaha/Toyota">
            </div>

            <div class="mb-3">
                <label>Keluhan</label>
                <textarea name="keluhan" class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Kendaraan</button>
            <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection