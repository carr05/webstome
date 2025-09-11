<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hero;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        return view('tampilan.index', compact('hero'));
    }

    public function update(Request $request)
    {
        $hero = Hero::first();

        if (!$hero) {
            $hero = new Hero();
        }

        // Update font_size
        if ($request->has('font_size') && $request->font_size != '') {
            $hero->font_size = $request->font_size;
        }

        // Update font_color
        if ($request->has('font_color') && $request->font_color != '') {
            $hero->font_color = $request->font_color;
        }

        // Update font
        if ($request->has('font') && $request->font != '') {
            $hero->font = $request->font;
        }

        // Upload image kalau ada file
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('hero', 'public');
            $hero->image = $path;
        }

        $hero->save();

        return redirect()->route('tampilan.index')
                         ->with('success', 'Hero berhasil diperbarui!');
    }
}
