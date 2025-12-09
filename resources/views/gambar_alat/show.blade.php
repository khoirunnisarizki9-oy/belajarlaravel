@extends('layouts.app')

@section('content')
<div class="container">

    <h3 class="mb-4">Detail Gambar Alat</h3>

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="mb-3">
                <strong>Nama Alat:</strong><br>
                {{ $gambarAlat->nama_alat }}
            </div>

            <div class="mb-3">
                <strong>Nomor Seri:</strong><br>
                {{ $gambarAlat->nomor_seri }}
            </div>

            <div class="mb-3">
                <strong>Foto Alat:</strong><br>
                @if ($gambarAlat->foto_alat)
                    <img src="{{ asset($gambarAlat->foto_alat) }}" 
                         alt="Foto {{ $gambarAlat->nama_alat }}" 
                         width="250" 
                         class="img-thumbnail mt-2">
                @else
                    <p class="text-muted">Tidak ada foto.</p>
                @endif
            </div>

            <a href="{{ route('gambar_alat.index') }}" class="btn btn-secondary mt-3">
                Kembali
            </a>

        </div>
    </div>

</div>
@endsection
