@csrf

<div class="mb-3">
    <label for="nama_alat" class="form-label">Nama Alat</label>
    <input type="text" 
        name="nama_alat" 
        id="nama_alat" 
        class="form-control @error('nama_alat') is-invalid @enderror"
        value="{{ old('nama_alat', $alat->nama_alat ?? '') }}">
        
    @error('nama_alat')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="merek" class="form-label">Merek</label>
    <input type="text" 
        name="merek" 
        id="merek" 
        class="form-control @error('merek') is-invalid @enderror"
        value="{{ old('merek', $alat->merek ?? '') }}">
        
    @error('merek')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="nomor_seri" class="form-label">Nomor Seri</label>
    <input type="text" 
        name="nomor_seri" 
        id="nomor_seri" 
        class="form-control @error('nomor_seri') is-invalid @enderror"
        value="{{ old('nomor_seri', $alat->nomor_seri ?? '') }}">

    @error('nomor_seri')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="tanggal_instalasi" class="form-label">Tanggal Instalasi</label>
    <input type="date" 
        name="tanggal_instalasi" 
        id="tanggal_instalasi" 
        class="form-control @error('tanggal_instalasi') is-invalid @enderror"
        value="{{ old('tanggal_instalasi', $alat->tanggal_instalasi ?? '') }}">

    @error('tanggal_instalasi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>