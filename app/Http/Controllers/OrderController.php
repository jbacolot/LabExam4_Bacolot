<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Menu;
use App\Models\Payment;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::with('menu')->get();
        return view('orders.index', compact('orders'));
    }

    public function create() {
        $menus = Menu::all();
        return view('orders.create', compact('menus'));
    }

    public function store(Request $request) {
        $menu = Menu::findOrFail($request->menu_id);

        $total = $request->quantity * $menu->price_per_kilo;

        Order::create([
            'user_id'=>auth()->id(),
            'menu_id'=>$menu->id,
            'quantity'=>$request->quantity,
            'total_cost'=>$total,
            'status'=>'Pending'
        ]);

        return redirect()->route('orders.index');
    }
    
}
