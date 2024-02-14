<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuContent;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    public function list()
    {
        $menus = Menu::with('children','childNum')->get();
        //dd($menus);
        return view('admin.pages.menu',compact('menus'));
    }
    public function content($id)
    {
        $contents = Menu::with('children')->find($id);
        //dd($contents);
        $deleteTitle = 'İçeriği Sil!';
        $deleteText = "İçeriği silmek istediğinizden emin misiniz?";
        confirmDelete($deleteTitle, $deleteText);
        return view('admin.pages.menucontent',compact('contents'));
    }
    public function create()
    {
        $menus = Menu::all();
        return view('admin.pages.menucreate',compact('menus'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'menu_id' => 'required',
        ]);
        $name = $request->input('name');
        $menu_id = $request->input('menu_id');
        $content = $request->input('content');
        $menuContent = new MenuContent;
        $menuContent->name = $name;
        $menuContent->menu_id = $menu_id;
        $menuContent->content = $content;
        $menuContent->save();
        Alert::success('Başarılı', 'Menü içeriği başarıyla eklendi');
        return redirect()->route('admin.menu.content',$menu_id);
    }
    public function edit($id)
    {
        $menuContent = MenuContent::find($id);
        $menus = Menu::all();
        return view('admin.pages.menuedit',compact('menuContent','menus'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'menu_id' => 'required',
        ]);
        $id = $request->input('id');
        $name = $request->input('name');
        $menu_id = $request->input('menu_id');
        $content = $request->input('content');
        $menuContent = MenuContent::find($id);
        $menuContent->name = $name;
        $menuContent->menu_id = $menu_id;
        $menuContent->content = $content;
        $menuContent->save();
        Alert::success('Başarılı', 'Menü içeriği başarıyla güncellendi');
        return redirect()->route('admin.menu.content',$menu_id);
    }
    public function destroy($id)
    {
        MenuContent::destroy($id);
        Alert::success('Başarılı', 'Menü içeriği başarıyla silindi');
        return redirect()->back();
    }

}
