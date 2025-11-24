<?php

namespace App\Http\Controllers;

use App\Models\Sidebar;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function index()
    {
        $menus = Sidebar::orderBy('order', 'asc')->get();
        return view('menu', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'icon'  => 'required',
            'path'  => 'required',
            'order' => 'required|integer',
            'status'=> 'required'
        ]);

        Sidebar::create($request->all());

        return response()->json(['message' => 'Menu berhasil ditambahkan']);
    }

    public function update(Request $request, $id)
    {
        $menu = Sidebar::findOrFail($id);

        $request->validate([
            'name'  => 'required',
            'icon'  => 'required',
            'path'  => 'required',
            'order' => 'required|integer',
            'status'=> 'required'
        ]);

        $menu->update($request->all());

        return response()->json(['message' => 'Menu berhasil diperbarui']);
    }

    public function destroy($id)
    {
        $menu = Sidebar::findOrFail($id);
        $menu->delete();

        return response()->json(['message' => 'Menu berhasil dihapus']);
    }

    public function toggleStatus($id)
    {
        $menu = Sidebar::findOrFail($id);

        $menu->status = $menu->status === 'active' ? 'inactive' : 'active';
        $menu->save();

        return response()->json(['message' => 'Status diperbarui']);
    }
}
