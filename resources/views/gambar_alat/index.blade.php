@extends('app')
@section('content')

    <div class="container">
        <h3 class="mb-3">Data Gambar Alat Elektromedis</h3>

        <a href="{{ route('gambar_alat.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Alat</th>
                <th>Nomor Seri</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_alat }}</td>
                    <td>{{ $item->nomor_seri }}</td>
                    <td>
                        @if($item->foto_alat)
                            <img src="{{ asset('storage/' . $item->foto_alat) }}" width="80">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('gambar_alat.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('gambar_alat.destroy', $item->id) }}"
                              method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection