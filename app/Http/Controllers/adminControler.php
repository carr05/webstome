<?php

// app/Http/Controllers/adminControler.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use App\Models\berita;
use App\Models\tampilan;
use App\Models\hero;

class adminControler extends Controller
{
    public function landing()
{
    $tampilan = Tampilan::first();
    return view('layout1.index', compact('tampilan'));
}

    public function landing2()
{
    $tampilan = Tampilan::first();
    $hero = Hero::first(); // ambil data hero pertama
    return view('layout2.index', compact('tampilan', 'hero'));
}
    

    public function formLogin()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
{
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    $admin = Admin::where('username', $request->username)->first();

    if ($admin && Hash::check($request->password, $admin->password)) {
        session([
            'admin_id' => $admin->id,
            'admin_username' => $admin->username,
        ]);

        $tampilan = Tampilan::find(1);

        if (!$tampilan) {
            $tampilan = Tampilan::create([
                'layout' => null,
                'font_size' => 'm',
                'warna' => null,
            ]);
        }

        // Jika sudah pilih layout → langsung ke home
        if ($tampilan->layout) {
            return redirect()->route('home');
        }

        // Kalau belum pilih layout → arahkan ke halaman layout.blade
        return redirect()->route('layout');
    }

    return back()->with('error', 'Username atau password salah.');
}

public function home()
    {
        if (!session()->has('admin_id')) {
            return redirect()->route('login');
        }

        $tampilan = Tampilan::find(1);

        if (!$tampilan || !$tampilan->layout) {
            return redirect()->route('layout');
        }

        return view('home', ['layout' => $tampilan->layout]);
    }


    public function layout()
    {
        return view('layout'); // atau nama view yang benar
    }

    public function tampilan1()

    {
        return view('tampilan.index'); // atau nama view yang benar
    }

    public function about()
    {
        return view('layout1.about');
    }
    public function hero()
    {
        return view('hero'); // atau nama view yang benar

    }

    public function berita()
    {
        return view('berita');
    }

    public function agenda()
    {
        return view('agenda');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function jurusan()
    {
        return view('jurusan');
    }
    public function prestasi()
    {
        return view('prestasi');
    }
    public function guru()
    {
        return view('guru');
    }
    public function staff()
    {
        return view('staff');
    }
    public function alumni()
    {
        return view('alumni');
    }
    public function ekstrakurikuler()
    {
        return view('ekstrakurikuler');
    }
    public function karya()
    {
        return view('karya');
    }

    

    public function index()
{
    $recentNews = berita::latest()->take(3)->get();
    return view('layout1.index', compact('recentNews'));
}


    public function logout()
    {
        session()->forget(['admin_id', 'admin_username']);
        return redirect()->route('login');
    }
}