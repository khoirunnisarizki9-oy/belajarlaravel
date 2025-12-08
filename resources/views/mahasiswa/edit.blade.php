<!-- resources/views/mahasiswa/edit.blade.php -->
@extends('app')
@section('title','Edit Mahasiswa')

@section('content')
    <div class="container mt-4">
        <h3>Edit Mahasiswa</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
                    @method('PUT')
                    @include('mahasiswa._form')
                    <div class="mt-3">
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection