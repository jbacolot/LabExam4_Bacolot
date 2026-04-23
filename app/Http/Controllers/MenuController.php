<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('menus.index',['menus'=>Menu::all()]);
    }

    public function create(){
        return view('menus.create');
    }

    public function store(Request $r){
        $r->validate([
            'name'=>'required',
            'category'=>'required',
            'price_per_kilo'=>'required|numeric',
            'stock'=>'required|numeric'
        ]);

        Menu::create($r->all());
        return redirect()->route('menus.index');
    }

    public function edit(Menu $menu){
        return view('menus.edit',compact('menu'));
    }

    public function update(Request $r, Menu $menu){
        $menu->update($r->all());
        return redirect()->route('menus.index');
    }

    public function destroy(Menu $menu){
        $menu->delete();
        return back();
    }
}