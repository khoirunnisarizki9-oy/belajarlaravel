@extends('app')
@section('content')

    <div class="container">
        <h3>Edit Gambar Alat</h3>

        <form action="{{ route('gambar_alat.update', $alat->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Alat</label>
                <input type="text" name="nama_alat" value="{{ $alat->nama_alat }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Seri</label>
                <input type="text" name="nomor_seri" value="{{ $alat->nomor_seri }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Foto Alat</label><br>
                @if($alat->foto_alat)
                    <img src="{{ asset('storage/' . $alat->foto_alat) }}" width="80"><br>
                @endif
                <input type="file" name="foto_alat" class="form-control mt-2">
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('gambar_alat.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection