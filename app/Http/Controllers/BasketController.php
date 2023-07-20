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

        ($orderId === null)
            ? session(['orderId' => Order::create()->id])
            : $order = Order::find($orderId);

        $order->products()->attach($productId);

        return redirect()->route('basket');
    }

    public function basketRemove(int $productId): view
    {
        $orderId = session('orderId');
        $order = Order::find($orderId);

        if (!$productId) {
            return view('basket', compact('order'));
        }

        $order->products()->detach($productId);

        return view('basket', compact('order'));
    }
}
