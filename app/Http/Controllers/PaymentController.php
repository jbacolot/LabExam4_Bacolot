<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        return view('payments.index',[
            'payments'=>Payment::with('order')->get()
        ]);
    }

    public function create(){
        return view('payments.create',[
            'orders'=>Order::all()
        ]);
    }

    public function store(Request $r){
        $order = Order::findOrFail($r->order_id);

        $balance = $order->total_cost - $r->amount_paid;

        if($r->amount_paid == 0){
            $status = 'Unpaid';
        }elseif($balance > 0){
            $status = 'Partial';
        }else{
            $status = 'Paid';
            $balance = 0;
        }

        Payment::create([
            'order_id'=>$r->order_id,
            'amount_paid'=>$r->amount_paid,
            'balance'=>$balance,
            'status'=>$status
        ]);

        return redirect()->route('payments.index');
    }
}