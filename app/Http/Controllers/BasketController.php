<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BasketController extends Controller
{
    public function basket(): View
    {
        $orderId = session('orderId');

        if ($orderId !== null) {

        }

        return view('basket/basket');
    }

    public function basketPlace(): View
    {
        return view('order');
    }

    public function basketAdd($productId): View
    {
        $orderId = session('orderId');
        if ($orderId === null) {
            $order = Order::create();
            session(['orderId' => $order]);
        } else {
            $order = Order::find($orderId);
        }

        $order->products()->attach($productId);

        return view('basket', compact('order'));
    }
}
