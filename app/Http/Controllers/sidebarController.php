<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    // Tampilkan halaman sidebar
    public function index()
    {
        return view('sidebar');
    }

    // Ambil semua data menu
    public function getMenus()
    {
        return Menu::orderBy('order')->get();
    }

    // Tambah menu
    public function store(Request $request)
    {
        $menu = Menu::create($request->all());
        return response()->json($menu);
    }

    // Update menu
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());

        return response()->json($menu);
    }

    // Hapus menu
    public function destroy($id)
    {
        Menu::findOrFail($id)->delete();

        return response()->json(['message' => 'Menu deleted']);
    }
}
