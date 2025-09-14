<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Tampilan;
use App\Models\Hero;
use Illuminate\Support\Facades\Storage;

class TampilanController extends Controller
=======
use App\Models\tampilan;

class tampilanController extends Controller
>>>>>>> 435a7c3 (landing web promosi)
{
    public function index()
    {
        $tampilan = Tampilan::first();
<<<<<<< HEAD
        $hero = Hero::first();
        return view('tampilan.index', compact('tampilan', 'hero'));
    }

    public function update(Request $request)
    {
        // --- Update Tampilan ---
        $tampilan = Tampilan::first() ?? new Tampilan();

        if ($request->filled('layout')) {
            $tampilan->layout = $request->layout;
        }
        if ($request->filled('font')) {
            $tampilan->font = $request->font;
        }
        if ($request->filled('font_size')) {
            $tampilan->font_size = $request->font_size;
        }
        if ($request->filled('warna')) {
            $tampilan->warna = $request->warna;
        }
        if ($request->filled('font_color')) {
            $tampilan->font_color = $request->font_color;
        }
        if ($request->filled('nama_sekolah')) {
            $tampilan->nama_sekolah = $request->nama_sekolah;
        }
        if ($request->filled('menu1')) {
            $tampilan->menu1 = $request->menu1; // simpan array menu ke JSON
        }
        if ($request->filled('menu2')) {
            $tampilan->menu2 = $request->menu2; // simpan array menu ke JSON
        }
        if ($request->filled('menu3')) {
            $tampilan->menu3 = $request->menu3; // simpan array menu ke JSON
        }
        if ($request->filled('menu4')) {
            $tampilan->menu4 = $request->menu4; // simpan array menu ke JSON
        }
        if ($request->filled('menu5')) {
            $tampilan->menu5 = $request->menu5; // simpan array menu ke JSON
        }

        if ($request->hasFile('logo')) {
        $logoPath = $request->file('logo')->store('logos', 'public');
        $tampilan->logo = $logoPath;
    }

        $tampilan->save();

        // --- Update Hero ---
        $hero = Hero::first() ?? new Hero();

        if ($request->filled('hero_font_size')) {
            $hero->font_size = $request->hero_font_size;
        }
        if ($request->filled('hero_font_color')) {
            $hero->font_color = $request->hero_font_color;
        }
        if ($request->filled('hero_font')) {
            $hero->font = $request->hero_font;
        }

        if ($request->hasFile('hero_image')) {
            if ($hero->image && Storage::disk('public')->exists($hero->image)) {
                Storage::disk('public')->delete($hero->image);
            }
            $hero->image = $request->file('hero_image')->store('hero', 'public');
        }

        $hero->save();

        return redirect()->route('tampilan.index')
                         ->with('success', 'Tampilan & Hero berhasil diperbarui!');
    }
}
=======
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


>>>>>>> 435a7c3 (landing web promosi)
