<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita; // sesuai nama model huruf kecil

class beritacontroller extends Controller
{
    // Halaman Landing - Menampilkan 5 berita terbaru
    public function landing()
    {
        $recentNews = berita::latest()->take(5)->get();
        return view('landing', compact('recentNews'));
    }

    // Halaman daftar semua berita
    public function index()
    {
        $berita = berita::latest()->get();
        return view('berita', compact('berita'));
    }

    // Form tambah berita
    public function create()
    {
        return view('admin.berita.create');
    }

    // Simpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul'   => 'required',
            'konten'  => 'required',
            'tanggal' => 'required|date',
            'gambar'  => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita', 'public');
        }

        berita::create([
            'judul'   => $request->judul,
            'konten'  => $request->konten,
            'tanggal' => $request->tanggal,
            'gambar'  => $gambarPath
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    // Form edit berita
    public function edit(berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    // Update berita
    public function update(Request $request, berita $berita)
    {
        $request->validate([
            'judul'   => 'required',
            'konten'  => 'required',
            'tanggal' => 'required|date',
            'gambar'  => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $gambarPath = $berita->gambar;
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($gambarPath && file_exists(storage_path('app/public/' . $gambarPath))) {
                unlink(storage_path('app/public/' . $gambarPath));
            }
            $gambarPath = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update([
            'judul'   => $request->judul,
            'konten'  => $request->konten,
            'tanggal' => $request->tanggal,
            'gambar'  => $gambarPath
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    // Hapus berita
    public function destroy(berita $berita)
    {
        // Hapus gambar jika ada
        if ($berita->gambar && file_exists(storage_path('app/public/' . $berita->gambar))) {
            unlink(storage_path('app/public/' . $berita->gambar));
        }

        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
