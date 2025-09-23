<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agenda;
use Carbon\Carbon;

class AgendaController extends Controller
{
    // Menampilkan semua agenda
    public function index()
    {
        $agendas = Agenda::latest()->paginate(10); // Pagination
        
        // Statistik
        $totalAgendas = Agenda::count();
        $agendasThisMonth = Agenda::whereYear('tanggal', Carbon::now()->year)
            ->whereMonth('tanggal', Carbon::now()->month)
            ->count();
        $upcomingAgendas = Agenda::where('tanggal', '>=', Carbon::now())->count();

        return view('agenda.index', compact('agendas', 'totalAgendas', 'agendasThisMonth', 'upcomingAgendas'));
    }

    // Form tambah agenda
    public function create()
    {
        return view('agenda.create');
    }

    // Simpan agenda baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
        ]);

        $data = $request->all();

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('agenda', 'public');
        }

        Agenda::create($data);

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil ditambahkan!');
    }

    // Menampilkan detail agenda
    // AgendaController.php
public function edit($id)
{
    $agenda = Agenda::findOrFail($id);
    return response()->json($agenda);
}

public function show($id)
{
    $agenda = Agenda::findOrFail($id);
    return response()->json($agenda);
}


    // Update agenda
    public function update(Request $request, $id)
    {
        $agenda = Agenda::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($agenda->gambar && \Storage::disk('public')->exists($agenda->gambar)) {
                \Storage::disk('public')->delete($agenda->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('agenda', 'public');
        }

        $agenda->update($data);

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil diperbarui!');
    }

    // Hapus agenda
    public function destroy($id)
{
    $agenda = Agenda::findOrFail($id);
    $agenda->delete();

    return response()->json([
        'success' => true,
        'message' => 'Agenda berhasil dihapus'
    ], 200);
}

}