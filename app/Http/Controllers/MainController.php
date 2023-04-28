<?php declare(strict_types=1);

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function categories()
    {
        return view('categories');
    }

    public function category(string $category)
    {
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
