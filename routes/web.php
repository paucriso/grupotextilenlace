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

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('demo2', function () {
    return view('pages.index2');
});

Route::get('nosotros', function () {
    return view('pages.nosotros');
});

Route::get('productos', function () {
    return view('pages.productos');
});

Route::get('contacto', function () {
    return view('pages.contacto');
});
