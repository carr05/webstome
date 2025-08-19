<?php

// app/Http/Controllers/adminControler.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use App\Models\berita;

class adminControler extends Controller
{
    public function landing()
    {
        $recentNews = berita::latest()->take(3)->get();
        return view('layout1.index', compact('recentNews'));
    }

    public function landing2()
    {
        $recentNews = berita::latest()->take(3)->get();
        return view('layout2.index', compact('recentNews'));
    }

    public function formLogin()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $admin = admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session([
                'admin_id' => $admin->id,
                'admin_username' => $admin->username
            ]);
            return redirect()->route('home');
        }

        return back()->with('error', 'Username atau password salah.');
    }

    public function home()
{
    if (!session()->has('admin_id')) {
        return redirect()->route('login');
    }

    $admin = admin::find(session('admin_id'));

    // Jika admin belum memilih layout, tampilkan pop-up
    if (!$admin->selected_layout) {
        return view('home', ['showLayoutPopup' => true]);
    }

    // Kalau sudah memilih, tampilkan halaman home biasa
    return view('home', ['showLayoutPopup' => false]);
}


    public function layout()
    {
        return view('layout'); // atau nama view yang benar
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
