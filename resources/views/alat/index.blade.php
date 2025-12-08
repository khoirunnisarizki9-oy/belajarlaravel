@extends('app')

@section('content')
<div class="container mt-4">
    <h2>Data Alat</h2>
    <a href="{{ route('alat.create') }}" class="btn btn-primary mb-3">Tambah Alat</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>ID Alat</th>
                <th>Nama Alat</th>
                <th>Merek</th>
                <th>Nomor Seri</th>
                <th>Tanggal Instalasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alat as $alat)
                <tr>
                    <td>{{ $loop->iteration }}</td>            {{-- Nomor urut --}}
                    <td>{{ $alat->id }}</td>                    {{-- ID Alat --}}
                    <td>{{ $alat->nama_alat }}</td>             {{-- Nama Alat --}}
                    <td>{{ $alat->merek }}</td>                 {{-- Merek --}}
                    <td>{{ $alat->nomor_seri }}</td>            {{-- Nomor Seri --}}
                    <td>{{ $alat->tanggal_instalasi }}</td>     {{-- Tanggal Instalasi --}}
                    <td>
                        <a href="{{ route('alat.show', $alat->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('alat.edit', $alat->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('alat.destroy', $alat->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection