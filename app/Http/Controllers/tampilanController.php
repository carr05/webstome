<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tampilan;

class tampilanController extends Controller
{
    public function index()
    {
        $tampilan = Tampilan::first();
        return view('layout', compact('tampilan'));
    }

    public function update(Request $request)
    {
        $tampilan = Tampilan::first();

        if (!$tampilan) {
            $tampilan = new Tampilan();
        }

        $tampilan->layout = $request->layout;
    $tampilan->font_size = $request->font_size ?? 'm'; // default 'm'
    $tampilan->font = $request->font ?? 'Poppins';     // default Poppins
    $tampilan->warna = $request->warna ?? '#000000';
    $tampilan->save();

        return redirect()->route('home')
                         ->with('success', 'Tampilan berhasil diperbarui!');
    }
}


