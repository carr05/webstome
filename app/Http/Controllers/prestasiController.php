<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestasi;

class PrestasiController extends Controller
{
    // Menampilkan halaman daftar prestasi
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.index', compact('prestasi'));
    }

    // Simpan prestasi baru
    public function store(Request $request)
    {
        $request->validate([
            'judul'   => 'required|string|max:255',
            'konten'  => 'required|string',
            'gambar'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
        ]);

        $data = $request->only(['judul', 'konten', 'tanggal']);

        // upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $fileName = time().'_'.$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('uploads/prestasi'), $fileName);
            $data['gambar'] = 'uploads/prestasi/'.$fileName;
        }

        Prestasi::create($data);

        return redirect()->route('prestasi.index')
                         ->with('success', 'Prestasi berhasil ditambahkan.');
    }

    // Tampilkan detail prestasi (JSON untuk modal detail)
public function show($id)
{
    $prestasi = Prestasi::findOrFail($id);
    return response()->json($prestasi, 200);
}

// Ambil data prestasi untuk form edit
public function edit($id)
{
    $prestasi = Prestasi::findOrFail($id);
    return response()->json($prestasi, 200);
}


    // Update prestasi
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'   => 'required|string|max:255',
            'konten'  => 'required|string',
            'gambar'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
        ]);

        $prestasi = Prestasi::findOrFail($id);

        $data = $request->only(['judul', 'konten', 'tanggal']);

        // update gambar jika ada file baru
        if ($request->hasFile('gambar')) {
            $fileName = time().'_'.$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('uploads/prestasi'), $fileName);
            $data['gambar'] = 'uploads/prestasi/'.$fileName;
        }

        $prestasi->update($data);

        return redirect()->route('prestasi.index')
                         ->with('success', 'Prestasi berhasil diperbarui.');
    }

    // Hapus prestasi
    public function destroy($id) { $prestasi = Prestasi::findOrFail($id); 
        // hapus file gambar kalau ada 
        if ($prestasi->gambar && file_exists(public_path($prestasi->gambar))) { unlink(public_path($prestasi->gambar)); } $prestasi->delete(); return response()->json([ 'success' => true, 'message' => 'Prestasi berhasil dihapus' ], 200); }
}
