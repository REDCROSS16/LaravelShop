<?php

namespace App\Http\Controllers;

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

    public function  basketAdd()
    {
        
    }
}
