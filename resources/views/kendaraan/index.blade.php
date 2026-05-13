@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Header & Tombol Tambah (Instruksi No. 4) -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Daftar Antrean Kendaraan</h2>
            <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Kendaraan
            </a>
        </div>

        <!-- Tabel Antrean (Instruksi No. 4) -->
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="px-4 py-3">No</th>
                            <th class="py-3">Plat Nomor</th>
                            <th class="py-3">Nama Pemilik</th>
                            <th class="py-3">Merk Kendaraan</th>
                            <th class="py-3">Keluhan</th>
                            <th class="py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($kendaraans as $key => $k)
                        <tr>
                            <td class="px-4">{{ $key + 1 }}</td>
                            <td class="fw-bold text-uppercase">{{ $k->plat_nomor }}</td>
                            <td>{{ $k->nama_pemilik }}</td>
                            <td>
                                <span class="badge bg-secondary">{{ $k->merk_kendaraan }}</span>
                            </td>
                            <td>{{ Str::limit($k->keluhan, 50) }}</td>
                            <td class="text-center">
                                <!-- Fitur Edit (Instruksi No. 5) -->
                                <a href="{{ route('kendaraan.edit', $k->id) }}" class="btn btn-sm btn-warning me-1">
                                    Edit
                                </a>

                                <!-- Fitur Hapus (Instruksi No. 5) -->
                                <!-- Wajib menggunakan tag <form>, @method('DELETE'), dan Konfirmasi JS -->
                                <form action="{{ route('kendaraan.destroy', $k->id) }}" method="POST" class="d-inline" 
                                      onsubmit="return confirm('Hapus kendaraan dari antrean?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">
                                Tidak ada antrean kendaraan saat ini.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection