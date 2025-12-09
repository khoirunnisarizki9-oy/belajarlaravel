@extends('app')
@section('content')

    <div class="container">
        <h3>Tambah Gambar Alat</h3>

        <form action="{{ route('gambar_alat.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Alat</label>
                <input type="text" name="nama_alat" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Seri</label>
                <input type="text" name="nomor_seri" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Foto Alat</label>
                <input type="file" name="foto_alat" class="form-control">
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('gambar_alat.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

@endsection