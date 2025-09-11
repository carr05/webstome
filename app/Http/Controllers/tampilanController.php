<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tampilan;
use App\Models\Hero;

class TampilanController extends Controller
{
    public function index()
    {
        $tampilan = Tampilan::first();
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
        if ($request->filled('warna')) {
            $tampilan->warna = $request->warna;
        }
        if ($request->filled('font')) {
            $tampilan->font = $request->font;
        }
        if ($request->filled('font_size')) {
            $tampilan->font_size = $request->font_size;
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
            $path = $request->file('hero_image')->store('hero', 'public');
            $hero->image = $path;
        }

        $hero->save();

        return redirect()->route('tampilan.index')
                         ->with('success', 'Tampilan & Hero berhasil diperbarui!');
    }
}
