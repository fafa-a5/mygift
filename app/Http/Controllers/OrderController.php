<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateOrderFormRequest;
use App\Models\Order;
use App\Models\Product; 
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(CreateOrderFormRequest $request)
    {
        $product = Product::find($request->product_id);
        $tax = $product->price_before_tax * 18 / 100;

        $order = Order::create([
            'slug' => 'O' . date('Ymd') . uniqid(),
            'cost_before_tax' => $product->price_before_tax,
            'tax' => $tax,
            'total_cost' => $product->price_before_tax + $tax,
            'total_items' => 1,
            'sender' => $request->sender_firstname . ' ' . $request->sender_lastname,
            'sender_phone' => $request->sender_phone,
            'sender_email' => $request->sender_email,
            'recipient' => $request->recipient,
            'recipient_phone' => $request->recipient_phone,
            'recipient_email' => $request->recipient_email,
            'delivery_address' => $request->recipient_address
        ]);

        $request->session()->flash('alert-success','Order created successfully');
        return to_route('payment.new', [ 'id' => $order->id ]);
    }
}
