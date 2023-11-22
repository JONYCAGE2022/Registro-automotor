<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\InfraccionController;
use App\Http\Controllers\TitularController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

//Página principal
Route::get('/', function () {
    return view('home');
})->name('Home');

//Automotor
Route::controller(AutoController::class)->group(function () {
    //Lista de automotores
    Route::get('/automotores', [AutoController::class, 'Index'])->name('ListaAutomotor');
    //Detalle del automotor
    Route::get('/automotores/{id}', [AutoController::class, 'show'])->name('DetalleAutomotor');
});

//Titulares
Route::controller(TitularController::class)->group(function () {
    //Lista de titulares
    Route::get('/titulares', [TitularController::class, 'Index'])->name('ListaTitular');
    //Detalle del titular
    Route::get('/titulares/{id}', [TitularController::class, 'show'])->name('DetalleTitular');
});

//Infracciones
Route::controller(TitularController::class)->group(function () {
    //Lista de infraciones
    Route::get('/infraccion', [InfraccionController::class, 'Index'])->name('ListaInfraccion');
    //Detalle de infraccion
    Route::get('/infraccion/{id}', [InfraccionController::class, 'show'])->name('DetalleInfraccion');
});
