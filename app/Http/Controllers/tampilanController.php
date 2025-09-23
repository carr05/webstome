<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tampilan;
use App\Models\Hero;
use App\Models\footer; 
use App\Models\semua;
use Illuminate\Support\Facades\Storage;

class tampilanController extends Controller
{
    public function index()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first(); 
        return view('tampilan.index', compact('tampilan', 'hero', 'footer', 'semua'));
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

// Style
if ($request->filled('footer_bg_color')) {
    $footer->footer_bg_color = $request->footer_bg_color;
}
if ($request->filled('footer_text_color')) {
    $footer->footer_text_color = $request->footer_text_color;
}
if ($request->filled('footer_link_color')) {
    $footer->footer_link_color = $request->footer_link_color;
}

// Kontak
if ($request->filled('footer_institution_name')) {
    $footer->footer_institution_name = $request->footer_institution_name;
}
if ($request->filled('footer_address')) {
    $footer->footer_address = $request->footer_address;
}
if ($request->filled('footer_phone')) {
    $footer->footer_phone = $request->footer_phone;
}
if ($request->filled('footer_email')) {
    $footer->footer_email = $request->footer_email;
}

// Media Sosial
if ($request->filled('footer_youtube')) {
    $footer->footer_youtube = $request->footer_youtube;
}
if ($request->filled('footer_instagram')) {
    $footer->footer_instagram = $request->footer_instagram;
}
if ($request->filled('footer_facebook')) {
    $footer->footer_facebook = $request->footer_facebook;
}
if ($request->filled('footer_twitter')) {
    $footer->footer_twitter = $request->footer_twitter;
}

// Layanan & Program
if ($request->filled('footer_services')) {
    $footer->footer_services = $request->footer_services;
}
if ($request->filled('footer_programs')) {
    $footer->footer_programs = $request->footer_programs;
}

// Link Penting
if ($request->filled('footer_policies')) {
    $footer->footer_policies = $request->footer_policies;
}
if ($request->filled('footer_external_links')) {
    $footer->footer_external_links = $request->footer_external_links;
}

// Jam Operasional
if ($request->filled('footer_weekday_hours')) {
    $footer->footer_weekday_hours = $request->footer_weekday_hours;
}
if ($request->filled('footer_saturday_hours')) {
    $footer->footer_saturday_hours = $request->footer_saturday_hours;
}
$footer->footer_show_hours = $request->has('footer_show_hours') ? 1 : 0;

// Hak Cipta & Developer
if ($request->filled('footer_copyright')) {
    $footer->footer_copyright = $request->footer_copyright;
}
if ($request->filled('footer_developer')) {
    $footer->footer_developer = $request->footer_developer;
}
$footer->footer_show_developer = $request->has('footer_show_developer') ? 1 : 0;

$footer->save();

$semua = Semua::first() ?? new Semua();

if ($request->filled('global_primary_color')){
    $semua->warna_utama = $request->global_primary_color;
}
if ($request->filled('global_primary_font')){
    $semua->font_utama = $request->global_primary_font;
}
if ($request->filled('global_heading_font')){
    $semua->font_heading = $request->global_heading_font;
}
if ($request->filled('global_secondry_color')){
    $semua->warna_kedua = $request->global_secondry_color;
}
if ($request->filled('global_font_color')){
    $semua->font_color = $request->global_font_color;
}

$semua->save();


        return redirect()->route('tampilan.index')
                         ->with('success', 'Tampilan, Hero & Footer berhasil diperbarui!');
    }
     public function footer()
    {
        return view('layout1.footer.main');
    }
    // Tambahin biar route /layout2/{halaman} bisa jalan
    public function halamanDinamis($halaman)
    {
        if (view()->exists("layout2.$halaman")) {
            return view("layout2.$halaman");
        }
        abort(404, "Halaman '$halaman' tidak ditemukan");
    }
}
