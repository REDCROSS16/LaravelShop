<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BasketController extends Controller
{
    # сама корзина с продуктами
    public function basket(): View
    {
        $orderId = session('orderId');

        if (!is_null($orderId)) {
            # not found exception
            $order = Order::findOrFail($orderId);
        }

        return view('basket/basket', compact('order'));
    }

    public function basketPlace(): View
    {
        return view('order');
    }

    # добавление продукта в корзину
    public function basketAdd($productId): view
    {
        $orderId = session('orderId');
        if ($orderId === null) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find(1);
        }

        $order->products()->attach($productId);
        return view('basket/basket', compact('order'));
    }
}
