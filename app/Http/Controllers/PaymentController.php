<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Order;

class PaymentController extends Controller
{
    public function index() {
        $payments = Payment::with('order')->get();
        return view('payments.index', compact('payments'));
    }

    public function store(Request $request) {
        $order = Order::findOrFail($request->order_id);

        $paid = $request->amount_paid;
        $balance = $order->total_cost - $paid;

        if ($paid == 0) {
            $status = 'Unpaid';
        } elseif ($paid < $order->total_cost) {
            $status = 'Partial';
        } else {
            $status = 'Paid';
        }

        Payment::create([
            'order_id'=>$order->id,
            'amount_paid'=>$paid,
            'balance'=>$balance,
            'status'=>$status
        ]);

        return redirect()->back();
    }
}
