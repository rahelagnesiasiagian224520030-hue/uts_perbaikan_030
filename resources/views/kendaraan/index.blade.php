@extends('layouts.master')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Antrean Kendaraan</h3>
    <!-- Tombol Tambah Kendaraan di atas tabel -->
    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Plat Nomor</th>
            <th>Nama Pemilik</th>
            <th>Merk Kendaraan</th>
            <th>Keluhan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kendaraans as $k)
        <tr>
            <td>{{ $k->plat_nomor }}</td>
            <td>{{ $k->nama_pemilik }}</td>
            <td>{{ $k->merk_kendaraan }}</td>
            <td>{{ $k->keluhan }}</td>
            <td>
                <!-- Placeholder untuk tombol Edit/Hapus poin 5 -->
                <a href="{{ route('kendaraan.edit', $k->id) }}" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection