<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index() {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create() {
        return view('menus.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' =>'required',
            'category' =>'required',
            'price_per_kilo' =>'required|numeric',
            'stock' =>'required|integer'
        ]);

        Menu::create($request->aall());
        return redirect()->route('menus.index');

    }

    public function edit($id) {
        $menu = Menu::findOrFail($id);
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, $id) {
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());
        return redirect()->route('menus.index');
    }

    public function destroy($id) {
        Menu::destroy($id);
        return redirecty()->route('menus.index');
    }
}
