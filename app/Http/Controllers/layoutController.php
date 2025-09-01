<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class layoutController extends Controller
{
<<<<<<< HEAD
    public function pilihLayout($layout)
{
    $admin = \App\Models\admin::find(session('admin_id'));

    if (!$admin) {
        return redirect()->route('login')->with('error', 'Silakan login dulu.');
    }

    $admin->layout = $layout; // pastikan kolom di DB ada
    $admin->save();

    return redirect()->route('home')->with('success', 'Layout berhasil dipilih.');
=======
    public function pilihLayout(Request $request)
{
    $request->validate([
        'layout' => 'required|in:landing,landing2',
    ]);

    $admin = admin::find(session('admin_id'));
    if (!$admin) {
        return redirect()->route('login')->with('error', 'Session tidak valid, silakan login lagi.');
    }

    $admin->layout = $request->layout;
    $admin->save();

    return redirect()->route('home')->with('success', 'Layout berhasil dipilih!');
>>>>>>> 9d760ca3b9a1edb5979a059f770aceed65a1c1e2
}


}
