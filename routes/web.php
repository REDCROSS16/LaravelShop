<?php declare(strict_types=1);

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/index', 'MainController@index');

Route::get('/categories', [MainController::class, 'categories']);

Route::get('/{category}', [MainController::class, 'category']);

Route::get('/mobiles/{product?}', 'MainController@product');
