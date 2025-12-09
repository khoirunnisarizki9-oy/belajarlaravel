<?php

namespace App\Http\Controllers;

use App\Models\GambarAlat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GambarAlatController extends Controller
{
    public function index()
    {
        $data = GambarAlat::all();
        return view('gambar_alat.index', compact('data'));
    }

    public function create()
    {
        return view('gambar_alat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_alat' => 'required',
            'nomor_seri' => 'required',
            'foto_alat' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fotoPath = null;

        if ($request->hasFile('foto_alat')) {
            $fotoPath = $request->file('foto_alat')->store('foto_alat', 'public');
        }

        GambarAlat::create([
            'nama_alat' => $request->nama_alat,
            'nomor_seri' => $request->nomor_seri,
            'foto_alat' => $fotoPath,
        ]);

        return redirect()->route('gambar_alat.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $alat = GambarAlat::findOrFail($id);
        return view('gambar_alat.edit', compact('alat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_alat' => 'required',
            'nomor_seri' => 'required',
            'foto_alat' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $alat = GambarAlat::findOrFail($id);

        if ($request->hasFile('foto_alat')) {
            Storage::disk('public')->delete($alat->foto_alat);
            $fotoPath = $request->file('foto_alat')->store('foto_alat', 'public');
        } else {
            $fotoPath = $alat->foto_alat;
        }

        $alat->update([
            'nama_alat' => $request->nama_alat,
            'nomor_seri' => $request->nomor_seri,
            'foto_alat' => $fotoPath,
        ]);

        return redirect()->route('gambar_alat.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $alat = GambarAlat::findOrFail($id);
        Storage::disk('public')->delete($alat->foto_alat);
        $alat->delete();

        return redirect()->route('gambar_alat.index')->with('success', 'Data berhasil dihapus');
    }
}