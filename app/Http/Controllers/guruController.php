<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;
use Illuminate\Support\Facades\Storage;

class guruController extends Controller
{
    // Tampilkan semua data guru
    public function index()
    {
        $guru = Guru::all();
        return view('guru.index', compact('guru'));
    }

    // Simpan guru baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'mapel' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('uploads/guru', 'public');
            $validated['foto'] = 'storage/' . $path;
        }

        Guru::create($validated);

        return response()->json(['success' => true]);
    }

    // Detail guru
    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return response()->json($guru);
    }

    // Edit guru
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return response()->json($guru);
    }

    // Update guru
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'mapel' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // hapus foto lama kalau ada
            if ($guru->foto && file_exists(public_path($guru->foto))) {
                unlink(public_path($guru->foto));
            }
            $path = $request->file('foto')->store('uploads/guru', 'public');
            $validated['foto'] = 'storage/' . $path;
        }

        $guru->update($validated);

        return response()->json(['success' => true]);
    }

    // Hapus guru
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        if ($guru->foto && file_exists(public_path($guru->foto))) {
            unlink(public_path($guru->foto));
        }

        $guru->delete();

        return response()->json(['success' => true]);
    }
}
