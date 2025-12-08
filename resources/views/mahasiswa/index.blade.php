<!-- resources/views/mahasiswa/index.blade.php -->
@extends('app') {{-- atau 'layouts.app' tergantung nama layout Anda; Anda sebut app.blade.php --}}
@section('title','Daftar Mahasiswa')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Daftar Mahasiswa</h3>
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($mahasiswa as $index => $m)
                        <tr>
                            <td>{{ $mahasiswa->firstItem() + $index }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->nim }}</td>
                            <td>{{ $m->prodi }}</td>
                            <td style="width: 220px;">
                                <a href="{{ route('mahasiswa.show', $m) }}" class="btn btn-sm btn-info">Lihat</a>
                                <a href="{{ route('mahasiswa.edit', $m) }}" class="btn btn-sm btn-warning">Edit</a>

                                <form action="{{ route('mahasiswa.destroy', $m) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada data mahasiswa.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $mahasiswa->links() }} {{-- pastikan Tailwind/Vite tidak mengubah styling pagination; untuk Bootstrap, bisa publish pagination views --}}
            </div>
        </div>
    </div>
@endsection