<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class layoutController extends Controller
{
    public function pilihLayout(Request $request)
{
    $request->validate([
        'layout' => 'required|in:landing,landing2,landing3',
    ]);

    $admin = admin::find(session('admin_id'));
    if (!$admin) {
        return redirect()->route('login')->with('error', 'Session tidak valid, silakan login lagi.');
    }

    $admin->layout = $request->layout;
    $admin->save();

    return redirect()->route('home')->with('success', 'Layout berhasil dipilih!');

}


}
