<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        $products = Product::get();

        return view('index', compact('products'));
    }

    public function categories(): View
    {
        $categories = Category::get();

        return view('categories', compact('categories'));
    }

    public function category(string $category): View
    {

//        $category = Category::where('code', $category)->get();
        $category = Category::where('code', $category)->first();
        $products = Product::where('category_id', $category->id)->get();

        return view('category', \compact('category', 'products'));
    }

    public function product(string $category, string $product = null): View
    {
        return view(
            'product',
            [
            'product' => $product,
        ]
        );
    }

    public function basket(): View
    {
        return view('basket/basket');
    }

    public function basketPlace(): View
    {
        return view('order');
    }
}
