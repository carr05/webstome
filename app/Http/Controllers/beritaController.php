<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;

class beritaController extends Controller
{
    /**
     * Tampilkan daftar berita sesuai layout admin
     */
    public function index()
    {
        $admin = Admin::find(session('admin_id')); // ambil admin yang login

        $berita = Berita::latest()->paginate(10);

        if ($admin && $admin->selected_layout == 'layout1') {
            return view('layout1.berita.index', compact('berita'));
        } else {
            return view('layout2.berita.index', compact('berita'));
        }
    }

    /**
     * Form tambah berita
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
            'judul'  => 'required',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $gambar = $request->file('gambar') 
            ? $request->file('gambar')->store('berita', 'public') 
            : null;

        Berita::create([
            'judul'   => $request->judul,
            'konten'  => $request->konten,
            'gambar'  => $gambar,
            'tanggal' => now(),
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Form edit berita
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
            'judul'  => 'required',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($beritum->gambar) {
                Storage::disk('public')->delete($beritum->gambar);
            }
            $gambar = $request->file('gambar')->store('berita', 'public');
        } else {
            $gambar = $beritum->gambar;
        }

        $beritum->update([
            'judul'  => $request->judul,
            'konten' => $request->konten,
            'gambar' => $gambar,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
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

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}
