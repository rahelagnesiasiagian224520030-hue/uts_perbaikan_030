@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Data Kendaraan</h3>
        <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
            @csrf
            {{-- Instruksi: Gunakan Method Spoofing untuk menyimpan perubahan --}}
            @method('PUT') 
            
            <div class="mb-3">
                <label class="form-label">Plat Nomor</label>
                <input type="text" name="plat_nomor" class="form-control" value="{{ $kendaraan->plat_nomor }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Pemilik</label>
                <input type="text" name="nama_pemilik" class="form-control" value="{{ $kendaraan->nama_pemilik }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Merk Kendaraan</label>
                <input type="text" name="merk_kendaraan" class="form-control" value="{{ $kendaraan->merk_kendaraan }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Keluhan</label>
                <textarea name="keluhan" class="form-control" rows="3">{{ $kendaraan->keluhan }}</textarea>
            </div>

            <button type="submit" class="btn btn-warning">Update Data</button>
            <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection