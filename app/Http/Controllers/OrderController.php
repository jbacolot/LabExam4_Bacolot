<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Menu;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('orders.index',[
            'orders'=>Order::with('menu')->get()
        ]);
    }

    public function create(){
        return view('orders.create',[
            'menus'=>Menu::all()
        ]);
    }

    public function store(Request $r){
        $menu = Menu::findOrFail($r->menu_id);

        $total = $r->quantity * $menu->price_per_kilo;

        Order::create([
            'menu_id'=>$r->menu_id,
            'quantity'=>$r->quantity,
            'total_cost'=>$total,
            'status'=>'Pending'
        ]);

        return redirect()->route('orders.index');
    }
}