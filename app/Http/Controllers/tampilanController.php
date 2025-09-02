<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tampilan;

class tampilanController extends Controller
{
    public function index()
    {
        $tampilan = Tampilan::first();
        return view('tampilan.index', compact('tampilan'));

    }

   public function update(Request $request)
{
    $tampilan = Tampilan::first();

    if (!$tampilan) {
        $tampilan = new Tampilan();
    }

    // Update layout kalau dikirim
    if ($request->has('layout') && $request->layout != '') {
        $tampilan->layout = $request->layout;
    }

    // Update warna/font/font_size kalau dikirim
    if ($request->has('warna') && $request->warna != '') {
        $tampilan->warna = $request->warna;
    }
    if ($request->has('font') && $request->font != '') {
        $tampilan->font = $request->font;
    }
    if ($request->has('font_size') && $request->font_size != '') {
        $tampilan->font_size = $request->font_size;
    }

    $tampilan->save();

    return redirect()->route('tampilan.index')
                     ->with('success', 'Tampilan berhasil diperbarui!');
}

}


