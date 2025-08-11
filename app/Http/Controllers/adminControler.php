<?php

namespace App\Http\Controllers;

// app/Http/Controllers/adminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;

class adminControler extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function formLogin()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $admin = admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['admin_id' => $admin->id, 'admin_username' => $admin->username]);
            return redirect()->route('home');
        }

        return back()->with('error', 'Username atau password salah.');
    }

    public function home()
    {
        if (!session()->has('admin_id')) {
            return redirect()->route('login');
        }

        return view('home');
    }
    public function layout()
    {
        return view('layout'); // atau nama view yang benar
    }

    public function berita()
    {
        return view('berita');
    }

    public function agenda()
    {
        return view('agenda');
    }

    public function index()
    {
        return view('layout1.index');
    }

    public function logout()
{
    session()->forget(['admin_id', 'admin_username']);
    return redirect()->route('login');
}

}
