<?php

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
    return view('index');
});

Auth::routes();


// RUTAS PARA PRECIOS
Route::get('precios/tabla',[App\Http\Controllers\PreciosController::class,'index'])->name('precios.tabla');
// FIN RUTAS PRECIOS

// RUTAS PARA LA AGENDA
Route::get('agendar/formulario',[App\Http\Controllers\AgendaController::class,'create'])->name('agendar.formulario');
Route::post('agendar/create',[App\Http\Controllers\AgendaController::class,'store']);
//  FIN RUTAS AGENDA

Route::resource('productos', 'App\Http\Controllers\ProductoController')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

