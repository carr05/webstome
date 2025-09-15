<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tampilan;
use App\Models\Hero;
use Illuminate\Support\Facades\Storage;

class tampilanController extends Controller
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
            $tampilan->menu1 = $request->menu1;
        }
        if ($request->filled('menu2')) {
            $tampilan->menu2 = $request->menu2;
        }
        if ($request->filled('menu3')) {
            $tampilan->menu3 = $request->menu3;
        }
        if ($request->filled('menu4')) {
            $tampilan->menu4 = $request->menu4;
        }
        if ($request->filled('menu5')) {
            $tampilan->menu5 = $request->menu5;
        }

        if ($request->hasFile('logo')) {
            // hapus logo lama
            if ($tampilan->logo && Storage::disk('public')->exists($tampilan->logo)) {
                Storage::disk('public')->delete($tampilan->logo);
            }
            $tampilan->logo = $request->file('logo')->store('logos', 'public');
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

        // ✅ Tambahan untuk Title & Subtitle
        if ($request->filled('hero_title')) {
            $hero->title = $request->hero_title;
        }
        if ($request->filled('hero_subtitle')) {
            $hero->subtitle = $request->hero_subtitle;
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
