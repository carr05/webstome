<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
    }
}
