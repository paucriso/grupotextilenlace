<?php

use App\Http\Controllers\PageController;
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

/* Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
}); */

Route::get('/', [PageController::class, 'index'])->name('pages.index');

Route::get('nosotros', [PageController::class, 'nosotros'])->name('pages.nosotros');

Route::get('productos', [PageController::class, 'productos'])->name('pages.productos');

Route::get('contacto', [PageController::class, 'contacto'])->name(('pages.contacto'));
