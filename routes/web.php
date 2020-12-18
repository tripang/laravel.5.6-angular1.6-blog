<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

Route::get('/parts/index', function () {
    return view('parts.index');
});

Route::get('/parts/{category}/{action?}', function ($category, $action = 'index') {
    return view(join('.', ['parts', $category, $action]));
});

Route::get('/parts/{category}/{action}/{id}', function ($category, $action = 'index', $id) {
    return view(join('.', ['parts', $category, $action]));
});

// Catch all undefined routes.
Route::any('{undefinedRoute}', function ($undefinedRoute) {
    return view('layout');
})->where('undefinedRoute', '([A-z\d-\/_.]+)?');
