<?php

// app/Http/Controllers/beritaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita; // Pastikan model 'berita' ada

class beritaController extends Controller
{
    public function landing()
    {
        // Ambil 5 berita terbaru
        $recentNews = berita::latest()->take(5)->get();

        // Kirim ke view 'landing.blade.php'
        return view('landing', compact('recentNews'));
    }

public function index()
    {
        // Ambil semua berita dari database
        $berita = Berita::latest()->get();

        // Kirim data ke view
        return view('layout1.index', compact('berita'));
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
            'judul' => 'required',
            'konten' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal' => $request->tanggal,
            'gambar' => $gambarPath
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
            'judul' => 'required',
            'konten' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $gambarPath = $berita->gambar;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal' => $request->tanggal,
            'gambar' => $gambarPath
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    // Hapus berita
    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
