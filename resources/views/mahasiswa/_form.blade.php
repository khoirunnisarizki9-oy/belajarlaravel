<!-- resources/views/mahasiswa/_form.blade.php -->
@csrf

<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
           value="{{ old('nama', $mahasiswa->nama ?? '') }}">
    @error('nama')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" name="nim" id="nim" class="form-control @error('nim') is-invalid @enderror"
           value="{{ old('nim', $mahasiswa->nim ?? '') }}">
    @error('nim')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="prodi" class="form-label">Prodi</label>
    <input type="text" name="prodi" id="prodi" class="form-control @error('prodi') is-invalid @enderror"
           value="{{ old('prodi', $mahasiswa->prodi ?? '') }}">
    @error('prodi')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>