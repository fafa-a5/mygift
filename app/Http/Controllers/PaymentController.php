<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function create($id)
    {
        $order = Order::find($id);

        return view('payment_new', [
            'order' => $order
        ]);
    }
    public function store(Request $request)
    {
         Payment::create([
            'slug' => 'P' . date('Ymd') . uniqid(),
            'number_received' => $request -> number_received,
            'cost' => $request -> cost,
            'method' => $request -> method
        ]);
    }
    
}
