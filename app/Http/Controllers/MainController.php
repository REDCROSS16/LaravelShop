<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function categories()
    {
        $categories = Category::get();

        return view('categories', compact('categories'));
    }

    public function category(string $category)
    {

//        $category = Category::where('code', $category)->get();
        $category = Category::where('code', $category)->first();

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
