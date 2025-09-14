<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::orderBy('id','asc')->get();
        return view('menus', compact('menus'));
    }

    public function store(Request $request)
    {
        Menu::create([
            'name' => $request->name,
            'category' => $request->category,
            'sub_category' => $request->sub_category,
            'is_active' => 1
        ]);

        return redirect()->back()->with('success','Menu berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update([
            'name' => $request->name,
        ]);
        return redirect()->back()->with('success','Menu berhasil diubah');
    }

    public function destroy($id)
    {
        Menu::findOrFail($id)->delete();
        return redirect()->back()->with('success','Menu berhasil dihapus');
    }

    public function toggle($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->is_active = !$menu->is_active;
        $menu->save();
        return response()->json(['status'=>'ok']);
    }
}
