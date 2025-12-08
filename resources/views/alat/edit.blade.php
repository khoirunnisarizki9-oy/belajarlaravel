@extends('app')
@section('title','Edit Alat')

@section('content')
    <div class="container mt-4">
        <h3>Edit Alat</h3>

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
                <form action="{{ route('alat.update', $alat) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @include('alat._form')

                    <div class="mt-3">
                        <a href="{{ route('alat.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection