<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tampilan;
use App\Models\Hero;
use App\Models\footer; 
use Illuminate\Support\Facades\Storage;

class tampilanController extends Controller
{
    public function index()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first(); 
        return view('tampilan.index', compact('tampilan', 'hero', 'footer'));
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

        // --- Update Footer ---
        $footer = Footer::first() ?? new Footer();

        if ($request->filled('informasi_kontak')) {
            $footer->informasi_kontak = $request->informasi_kontak;
        }
        if ($request->filled('link_berguna')) {
            $footer->link_berguna = $request->link_berguna;
        }
        if ($request->filled('layanan')) {
            $footer->layanan = $request->layanan;
        }
        if ($request->filled('hic_solutastip')) {
            $footer->hic_solutastip = $request->hic_solutastip;
        }
        if ($request->filled('nobis_illum')) {
            $footer->nobis_illum = $request->nobis_illum;
        }
        if ($request->filled('informasi_hak_cipta')) {
            $footer->informasi_hak_cipta = $request->informasi_hak_cipta;
        }

        $footer->save();

        return redirect()->route('tampilan.index')
                         ->with('success', 'Tampilan, Hero & Footer berhasil diperbarui!');
    }
}
