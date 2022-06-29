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
Route::get('precios/tabla',[App\Http\Controllers\ProductoController::class,'tableAll'])->name('precios.tabla');
// FIN RUTAS PRECIOS

// RUTAS PARA LA AGENDA
Route::get('agendar/formulario',[App\Http\Controllers\AgendaController::class,'create'])->name('agendar.formulario');
Route::post('agendar/create',[App\Http\Controllers\AgendaController::class,'store']);
//  FIN RUTAS AGENDA

Route::resource('productos', 'App\Http\Controllers\ProductoController')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//ruta que me redirige al formulario para la creacion de una nueva cita
Route::get('/agendar/nueva', [App\Http\Controllers\AgendaController::class, 'create'])->name('agendar.nueva');
//ruta que me obtiene los datos del formulario para la creacion de una nueva cita
Route::post('/agendar/separar', [App\Http\Controllers\AgendaController::class, 'store'])->name('agendar.separar');
//ruta que me redirecciona a la vista create donde se visualizara que se creo la cita con exito
route::get('/agendar/creada', [App\Http\Controllers\AgendaController::class, 'citaCorrecta'])->name('agendar.creada');
//ruta que me redirecciona a la tabla de citas
route::get('/agendar/visualizar', [App\Http\Controllers\AgendaController::class, 'tableAll'])->name('agendar.visualizar')->middleware('auth');
//ruta que me redirecciona a la vista general de crud trabajos
route::resource('trabajos', 'App\Http\Controllers\TrabajoController')->middleware('auth');
//ruta que me redirecciona a la tabla de trabajos
route::get('trabajos/visualizar',[App\Http\Controllers\TrabajoController::class, 'tableAll'])->name('trabajos.visualizar')->middleware('auth');

//vista para mostrar ayudas
Route::get('ayuda', function () {
    return view('preguntasFrecuentes');
});