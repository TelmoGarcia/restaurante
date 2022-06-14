<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productosController;

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
    return view('welcome');
});


Route::resource('platos', PlatoController::class);



Route::get('/inicio',[HomeController::class,'index'])->name('inicio');

Auth::routes(['reset'=>false]);

Route::get('/home', [PlatoController::class, 'index'])->name('home');

Route::get('/contacto', function () {
    return view('contacto');
    
});

Route::get('/productos', function () {
    return view('productos');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
