<?php

// app/Http/Controllers/adminControler.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use App\Models\berita;
use App\Models\tampilan;
use App\Models\hero;
use App\Models\footer;
use App\Models\semua;

class adminControler extends Controller
{
    public function landing()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.index', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function landing2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();

        return view('layout2.index', compact('tampilan', 'hero', 'footer'));
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
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.about', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function menu()
    {
        return view('menu'); // atau nama view yang benar
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

    public function berita()
    {
        return view('berita');
    }

    public function karya()
    {
        return view('karya');
    }

    public function preview()
    {
        $tampilan = Tampilan::first(); // Ambil data layout yg dipilih admin

        if ($tampilan && $tampilan->layout == 'layout2') {
            return redirect()->route('layout2.index');
        }

        // Default layout1
        return redirect()->route('layout1.index');
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

    //layout 1
    public function navbar()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.navbar.main', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function footer()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.footer.main', compact('tampilan', 'hero', 'footer', 'semua'));
    }
   
    public function kepsek()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.kepsek', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function admissions()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.admissions', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function academics()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.academics', compact('tampilan', 'hero', 'footer', 'semua'));
    }
     public function alumni1()
    {
                $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.alumni1', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function faculty_staff()
    {
                $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.faculty_staff', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function campus_facilities()
    {
                $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.campus_facilities', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function students_life()
    {
                $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.students_life', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function news()
    {
                $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.news', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function events()
    {
                $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.events', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function news_details()
    {
                $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.news_details', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function event_details()
    {
               $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.event_details', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function privacy()
    {
               $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.privacy', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function terms_of_service()
    {
                $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.terms_of_service', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function eror()
    {
               $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.eror', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function starter_page()
    {
                $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.starter_page', compact('tampilan', 'hero', 'footer', 'semua'));
    }
    public function contact()
    {
               $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout1.contact', compact('tampilan', 'hero', 'footer', 'semua'));
    }


    //layout 2
    public function kepsek2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.kepsek', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function admissions2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.admissions2', compact('tampilan', 'hero', 'footer', 'semua'));
    }
   
    public function academics2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.academics2', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function faculty_staff2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.faculty_staff', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function campus_facilities2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.campus_facilities', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function students_life2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.students_life', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function news2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.news', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function events2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.events', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function alumni2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.alumni', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function news_details2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.news_details', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function event_details2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.event_details', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function privacy2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.privacy', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function terms_of_service2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.terms_of_service', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function eror2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.eror', compact('tampilan', 'hero', 'footer', 'semua'));
    }

    public function starter_page2()
    {
        $tampilan = Tampilan::first();
        $hero = Hero::first();
        $footer = Footer::first();
        $semua = Semua::first();
        return view('layout2.starter_page', compact('tampilan', 'hero', 'footer', 'semua'));
    }


    // landing
    public function webpromosi()
    {
        return view('webpromosi');
    }
    
public function halamanDinamis($halaman)
{
    // Ambil data dari DB kalau ada
    $tampilan = \App\Models\Tampilan::first();
    $hero = Hero::first();
    $footer = Footer::first();
    $semua = Semua::first();

    // Cek apakah $halaman sesuai dengan salah satu menu
    $validMenus = [
        $tampilan->menu1,
        $tampilan->menu2,
        $tampilan->menu3,
        $tampilan->menu4,
        $tampilan->menu5,
    ];

    if (in_array($halaman, $validMenus)) {
        return view("layout2.$halaman", compact('tampilan', 'hero', 'footer', 'semua'));
    }

    // Kalau tidak ada → tampilkan 404 custom
    abort(404, "Halaman '$halaman' tidak ditemukan.");
}

}
