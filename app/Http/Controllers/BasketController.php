<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BasketController extends Controller
{
    public function basket(): View
    {
        return view('basket/basket');
    }

    public function basketPlace(): View
    {
        return view('order');
    }

    public function  basketAdd($productId)
    {
        $orderId = session('orderId');
        if ($orderId === null) {
            $orderId = Order::create()->id;
        }
    }
}
