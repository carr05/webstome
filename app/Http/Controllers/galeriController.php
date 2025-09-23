<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri; // pastikan model Galeri sudah ada

class galeriController extends Controller
{
    // Tampilkan semua galeri
    public function index()
    {
        $galeri = Galeri::all();
        return view('galeri.index', compact('galeri'));
    }

    // Simpan galeri baru
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
            $request->gambar->move(public_path('uploads/galeri'), $fileName);
            $data['gambar'] = 'uploads/galeri/'.$fileName;
        }

        Galeri::create($data);

        return redirect()->route('galeri.index')
                         ->with('success', 'Galeri berhasil ditambahkan.');
    }

    // Tampilkan detail galeri (JSON, untuk modal detail)
    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        return response()->json($galeri, 200);
    }

    // Ambil data galeri untuk form edit
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return response()->json($galeri, 200);
    }

    // Update galeri
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'   => 'required|string|max:255',
            'konten'  => 'required|string',
            'gambar'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
        ]);

        $galeri = Galeri::findOrFail($id);

        $data = $request->only(['judul', 'konten', 'tanggal']);

        // update gambar jika ada file baru
        if ($request->hasFile('gambar')) {
            // hapus gambar lama jika ada
            if ($galeri->gambar && file_exists(public_path($galeri->gambar))) {
                unlink(public_path($galeri->gambar));
            }

            $fileName = time().'_'.$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('uploads/galeri'), $fileName);
            $data['gambar'] = 'uploads/galeri/'.$fileName;
        }

        $galeri->update($data);

        return redirect()->route('galeri.index')
                         ->with('success', 'Galeri berhasil diperbarui.');
    }

    // Hapus galeri
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // hapus file gambar kalau ada
        if ($galeri->gambar && file_exists(public_path($galeri->gambar))) {
            unlink(public_path($galeri->gambar));
        }

        $galeri->delete();

        return response()->json([
            'success' => true,
            'message' => 'Galeri berhasil dihapus'
        ], 200);
    }
}
