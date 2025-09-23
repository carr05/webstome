<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita; // Pastikan huruf besar
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Tampilkan daftar berita.
     */
    public function index()
    {
        $beritaList   = Berita::orderBy('created_at', 'desc')->paginate(5);
        $totalBerita  = Berita::count();

        // Statistik sederhana
        $beritaUpdated = session('berita_updated', 0);
        $beritaDeleted = session('berita_deleted', 0);
        $totalViews    = Berita::sum('views') ?? 0;

        return view('berita.index', compact(
            'beritaList', 'totalBerita', 'beritaUpdated', 'beritaDeleted', 'totalViews'
        ));
    }

    /**
     * Form buat berita baru.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Simpan berita baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'    => 'required|string|max:255|min:5',
            'kategori' => 'nullable|string|max:100',
            'konten'   => 'required|string|min:10',
            'tanggal'  => 'required|date',
            'gambar'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $berita = new Berita();
        $berita->judul    = $request->judul;
        $berita->kategori = $request->kategori ?? 'Umum';
        $berita->konten   = $request->konten;
        $berita->tanggal  = $request->tanggal;
        $berita->views    = 0;

        if ($request->hasFile('gambar')) {
            $berita->gambar = $request->file('gambar')->store('berita', 'public');
        }

        $berita->save();

        session(['berita_updated' => session('berita_updated', 0) + 1]);

        return redirect()->route('berita.index')
                         ->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Detail berita (JSON untuk AJAX).
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        
        // Hanya increment views jika bukan request AJAX dari modal detail
        if (!request()->expectsJson()) {
            $berita->increment('views');
        }
        
        return response()->json($berita);
    }

    /**
     * Ambil data berita untuk form edit (AJAX).
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return response()->json($berita);
    }

    /**
     * Update berita.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'    => 'required|string|max:255|min:5',
            'kategori' => 'nullable|string|max:100',
            'konten'   => 'required|string|min:10',
            'tanggal'  => 'required|date',
            'gambar'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul    = $request->judul;
        $berita->kategori = $request->kategori ?? $berita->kategori;
        $berita->konten   = $request->konten;
        $berita->tanggal  = $request->tanggal;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $berita->gambar = $request->file('gambar')->store('berita', 'public');
        }

        $berita->save();

        session(['berita_updated' => session('berita_updated', 0) + 1]);

        // Response untuk AJAX
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Berita berhasil diperbarui!'
            ]);
        }

        return redirect()->route('berita.index')
                         ->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Hapus berita.
     */
    public function destroy($id)
    {
        try {
            $berita = Berita::findOrFail($id);

            // Hapus gambar jika ada
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $berita->delete();

            session(['berita_deleted' => session('berita_deleted', 0) + 1]);

            // Response untuk AJAX
            if (request()->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Berita berhasil dihapus!'
                ]);
            }

            return redirect()->route('berita.index')
                             ->with('success', 'Berita berhasil dihapus!');

        } catch (\Exception $e) {
            // Response error untuk AJAX
            if (request()->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal menghapus berita: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->route('berita.index')
                             ->with('error', 'Gagal menghapus berita: ' . $e->getMessage());
        }
    }
}