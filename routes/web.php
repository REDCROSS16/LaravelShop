<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // view - незвание шаблона
    // из папки resources шаблон welcom.blade.php
    return view('index');
});

Route::get('/categories', function () {
   return view('categories');
});

Route::get('/categories/{id}', function () {
    return view('product');
});
