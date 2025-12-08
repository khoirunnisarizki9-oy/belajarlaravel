<!-- resources/views/mahasiswa/show.blade.php -->
@extends('app')
@section('title','Detail Mahasiswa')

@section('content')
    <div class="container mt-4">
        <h3>Detail Mahasiswa</h3>

        <div class="card">
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th style="width: 150px">Nama</th>
                        <td>{{ $mahasiswa->nama }}</td>
                    </tr>
                    <tr>
                        <th>NIM</th>
                        <td>{{ $mahasiswa->nim }}</td>
                    </tr>
                    <tr>
                        <th>Prodi</th>
                        <td>{{ $mahasiswa->prodi }}</td>
                    </tr>
                </table>

                <a href="{{ route('mahasiswa.edit', $mahasiswa) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection