<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
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
=======
use App\Models\Berita;
use App\Models\Admin;

class beritaController extends Controller
{
    public function index()
    {
        $admin = Admin::find(session('admin_id')); // ambil admin yang login

        // Tampilkan CRUD berita sesuai layout
        if ($admin->selected_layout == 'layout1') {
            return view('layout1.berita.index', [
                'berita' => Berita::all()
            ]);
        } else {
            return view('layout2.berita.index', [
                'berita' => Berita::all()
            ]);
        }
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        Berita::create($request->all());
        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->update($request->all());
        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
>>>>>>> 9d760ca3b9a1edb5979a059f770aceed65a1c1e2
    }
}
