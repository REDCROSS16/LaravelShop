<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function categories()
    {
        dd(1);
        return view('categories');
    }

    public function category(string $category)
    {
        $category = Categories::query()->where('code', '', $category);
        dd($category);

        return view('category', \compact('category'));
    }

    public function product(string $product = null)
    {
        return view(
            'product',
            [
            'product' => $product,
        ]
        );
    }
}
