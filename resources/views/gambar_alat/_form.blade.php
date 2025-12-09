<div class="mb-3">
    <label class="form-label">Nama Alat</label>
    <input 
        type="text" 
        name="nama_alat" 
        class="form-control @error('nama_alat') is-invalid @enderror"
        value="{{ old('nama_alat', $gambarAlat->nama_alat ?? '') }}"
        required>
    @error('nama_alat')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Nomor Seri</label>
    <input 
        type="text" 
        name="nomor_seri" 
        class="form-control @error('nomor_seri') is-invalid @enderror"
        value="{{ old('nomor_seri', $gambarAlat->nomor_seri ?? '') }}"
        required>
    @error('nomor_seri')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Foto Alat</label>
    <input 
        type="file" 
        name="foto_alat" 
        class="form-control @error('foto_alat') is-invalid @enderror">

    @error('foto_alat')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    {{-- Tampilkan foto lama jika mode edit --}}
    @isset($gambarAlat->foto_alat)
        <div class="mt-2">
            <img src="{{ asset($gambarAlat->foto_alat) }}" 
                 alt="Foto Alat" 
                 width="150" 
                 class="img-thumbnail">
        </div>
    @endisset
</div>

<button type="submit" class="btn btn-primary">
    {{ isset($gambarAlat) ? 'Update' : 'Simpan' }}
</button>
