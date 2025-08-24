<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class layoutController extends Controller
{
    public function pilihLayout($layout)
{
    $admin = \App\Models\admin::find(session('admin_id'));

    if (!$admin) {
        return redirect()->route('login')->with('error', 'Silakan login dulu.');
    }

    $admin->layout = $layout; // pastikan kolom di DB ada
    $admin->save();

    return redirect()->route('home')->with('success', 'Layout berhasil dipilih.');
}


}
