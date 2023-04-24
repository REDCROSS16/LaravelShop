<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', 'MainController@index');

Route::get('/categories', 'MainController@categories');

Route::get('/{category}', 'MainController@category');

Route::get('/mobiles/{product?}', 'MainController@product');
