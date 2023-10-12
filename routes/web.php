<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/voluntariado', [HomePageController::class, 'voluntariado'])->name('voluntariado');
Route::get('/tiendita', [HomePageController::class, 'tiendita'])->name('tiendita');

// correos
Route::post('/contactanos', [HomePageController::class, 'contactanos'])->name('contactanos');
Route::post('/hazteSocio', [HomePageController::class, 'hazteSocio'])->name('hazteSocio');
