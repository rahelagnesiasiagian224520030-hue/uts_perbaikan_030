@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Daftar Antrean Kendaraan</h3>
            <!-- Tombol Tambah Kendaraan -->
            <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
        </div>

        <div class="table-responsive">
            <!-- Tabel HTML Bootstrap -->
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Plat Nomor</th>
                        <th>Nama Pemilik</th>
                        <th>Merk Kendaraan</th>
                        <th>Keluhan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kendaraans as $key => $k)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $k->plat_nomor }}</td>
                        <td>{{ $k->nama_pemilik }}</td>
                        <td>{{ $k->merk_kendaraan }}</td>
                        <td>{{ $k->keluhan }}</td>
                        <td>
                            <!-- Fitur Ubah (Edit) -->
                            <a href="{{ route('kendaraan.edit', $k->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <!-- Fitur Hapus dengan Konfirmasi JS -->
                            <form action="{{ route('kendaraan.destroy', $k->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus kendaraan dari antrean?')">
                                @csrf
                                @method('DELETE') <!-- Method Spoofing -->
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Belum ada antrean kendaraan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection