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

//Lista de automotores
Route::get('/automotores{marca}',[AutoController::class,'Index'])->name('ListaAutomotor');

//Lista de titulares
Route::get('/titulares',[TitularController::class,'Index'])->name('ListaTitular');

//Lista de infraciones
Route::get('/infraccion',[InfraccionController::class,'Index'])->name('ListaInfraccion');