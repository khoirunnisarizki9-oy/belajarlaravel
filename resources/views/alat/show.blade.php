@extends('app')
@section('title','Detail Alat')

@section('content')
    <div class="container mt-4">
        <h3>Detail Alat</h3>

        <div class="card">
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th style="width: 180px">ID Alat</th>
                        <td>{{ $alat->id }}</td>
                    </tr>
                    <tr>
                        <th>Nama Alat</th>
                        <td>{{ $alat->nama_alat }}</td>
                    </tr>
                    <tr>
                        <th>Merek</th>
                        <td>{{ $alat->merek }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Seri</th>
                        <td>{{ $alat->nomor_seri }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Instalasi</th>
                        <td>{{ $alat->tanggal_instalasi }}</td>
                    </tr>
                </table>

                <a href="{{ route('alat.edit', $alat->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('alat.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection