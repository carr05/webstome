<?php

// app/Http/Controllers/adminControler.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use App\Models\berita;
use App\Models\tampilan;
<<<<<<< HEAD
use App\Models\hero;
=======
>>>>>>> 435a7c3 (landing web promosi)

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
<<<<<<< HEAD
    $hero = Hero::first(); // ambil data hero pertama
    return view('layout2.index', compact('tampilan', 'hero'));
}
    
=======
    return view('layout2.index', compact('tampilan'));
}
>>>>>>> 435a7c3 (landing web promosi)

    public function formLogin()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
<<<<<<< HEAD
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

=======
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

            // Kalau belum pilih layout → arahkan ke halaman pilih layout
            return redirect()->route('tampilan.index');
        }

        return back()->with('error', 'Username atau password salah.');
    }
>>>>>>> 435a7c3 (landing web promosi)
public function home()
    {
        if (!session()->has('admin_id')) {
            return redirect()->route('login');
        }

        $tampilan = Tampilan::find(1);

        if (!$tampilan || !$tampilan->layout) {
<<<<<<< HEAD
            return redirect()->route('layout');
=======
            return redirect()->route('tampilan.index');
>>>>>>> 435a7c3 (landing web promosi)
        }

        return view('home', ['layout' => $tampilan->layout]);
    }


    public function layout()
    {
<<<<<<< HEAD
        return view('layout'); // atau nama view yang benar
=======
        return view('tampilan.index'); // atau nama view yang benar
>>>>>>> 435a7c3 (landing web promosi)
    }

    public function tampilan1()

    {
        return view('tampilan.index'); // atau nama view yang benar
    }

<<<<<<< HEAD
    public function about()
    {
        return view('layout1.about');
    }
=======
>>>>>>> 435a7c3 (landing web promosi)
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
<<<<<<< HEAD
    public function alumni()
    {
        return view('alumni');
    }
=======
>>>>>>> 435a7c3 (landing web promosi)
    public function ekstrakurikuler()
    {
        return view('ekstrakurikuler');
    }
    public function karya()
    {
        return view('karya');
    }
    public function preview()
{
    $tampilan = \App\Models\Tampilan::first(); // Ambil data layout yg dipilih admin

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
<<<<<<< HEAD
=======

    //layout 1
    public function kepsek()
    {
        return view('layout1.kepsek');
    }

    public function admissions()
    {
        return view('layout1.admissions');
    }
    public function academics()
    {
        return view('layout1.academics');
    }
    public function faculty_staff()
    {
        return view('layout1.faculty_staff');
    }
    public function campus_facilities()
    {
        return view('layout1.campus_facilities');
    }
    public function students_life()
    {
        return view('layout1.students_life');
    }
    public function news()
    {
        return view('layout1.news');
    }
    public function events()
    {
        return view('layout1.events');
    }
    public function alumni()
    {
        return view('layout1.alumni');
    }
    public function news_details()
    {
        return view('layout1.news_details');
    }
    public function event_details()
    {
        return view('layout1.event_details');
    }
    public function privacy()
    {
        return view('layout1.privacy');
    }
    public function terms_of_service()
    {
        return view('layout1.terms_of_service');
    }
    public function eror()
    {
        return view('layout1.eror');
    }
    public function starter_page()
    {
        return view('layout1.starter_page');
    }


    //layout 2
    public function kepsek2()
    {
        return view('layout2.kepsek');
    }

    public function admissions2()
    {
        return view('layout2.admissions');
    }
    public function academics2()
    {
        return view('layout2.academics');
    }
    public function faculty_staff2()
    {
        return view('layout2.faculty_staff');
    }
    public function campus_facilities2()
    {
        return view('layout2.campus_facilities');
    }
    public function students_life2()
    {
        return view('layout2.students_life');
    }
    public function news2()
    {
        return view('layout2.news');
    }
    public function events2()
    {
        return view('layout2.events');
    }
    public function alumni2()
    {
        return view('layout2.alumni');
    }
    public function news_details2()
    {
        return view('layout2.news_details');
    }
    public function event_details2()
    {
        return view('layout2.event_details');
    }
    public function privacy2()
    {
        return view('layout2.privacy');
    }
    public function terms_of_service2()
    {
        return view('layout2.terms_of_service');
    }
    public function eror2()
    {
        return view('layout2.eror');
    }
    public function starter_page2()
    {
        return view('layout2.starter_page');
    }


    // landing
    public function webpromosi()
    {
        return view('webpromosi');
    }


>>>>>>> 435a7c3 (landing web promosi)
}