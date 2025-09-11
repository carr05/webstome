<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class beritaController extends Controller
{
    /**
     * Tampilkan daftar berita
     */
    public function index()
    {
        $berita = Berita::latest()->paginate(10);
        return view('berita.index', compact('berita'));
    }

    /**
     * Tampilkan form tambah berita
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Simpan berita baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $gambar = $request->file('gambar') ? $request->file('gambar')->store('berita', 'public') : null;

        Berita::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'gambar' => $gambar,
            'tanggal' => now(),
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Tampilkan form edit berita
     */
    public function edit(Berita $beritum)
    {
        return view('berita.edit', compact('beritum'));
    }

    /**
     * Update berita
     */
    public function update(Request $request, Berita $beritum)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            // hapus gambar lama kalau ada
            if ($beritum->gambar) {
                Storage::disk('public')->delete($beritum->gambar);
            }
            $gambar = $request->file('gambar')->store('berita', 'public');
        } else {
            $gambar = $beritum->gambar;
        }

        $beritum->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'gambar' => $gambar,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * Hapus berita
     */
    public function destroy(Berita $beritum)
    {
        if ($beritum->gambar) {
            Storage::disk('public')->delete($beritum->gambar);
        }
        $beritum->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
