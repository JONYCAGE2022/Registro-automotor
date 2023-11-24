<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\AutoAdminController;
use App\Http\Controllers\InfraccionController;
use App\Http\Controllers\InfraccionAdminController;
use App\Http\Controllers\TitularController;
use App\Http\Controllers\TitularAdminController;
use App\Http\Controllers\ProfileController;
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
}); */

//Página principal
Route::get('/', function () {
    return view('home');
})->name('Home');

//Automotor sin que el usuario se autentique
Route::controller(AutoController::class)->group(function () {
    //Lista de automotores
    Route::get('/automotores', [AutoController::class, 'Index'])->name('ListaAutomotor');
    //Detalle del automotor
    Route::get('/automotores/{id}', [AutoController::class, 'show'])->name('DetalleAutomotor');
});

//Automotor usuario autentificado
Route::controller(AutoAdminController::class)->group(function () {
    //Lista de automotores
    Route::get('dashboard/automotores', [AutoAdminController::class, 'Index'])->name('ListaAdminAutomotor');
    //Detalle del automotor
    Route::get('dashboard/automotores/{id}', [AutoAdminController::class, 'show'])->name('DetalleAdminAutomotor');
    //Eliminar automotor
    Route::delete('dashboard/automotores/{id}',[AutoAdminController::class, 'destroy'])->name('EliminarAutomotor');
    //Editar automotor
    Route::get('dashboard/automotores/editar/{id}',[AutoAdminController::class, 'edit'])->name('EditarAutomotor');
    //Actualizar automotor
    Route::put('dashboard/automotores/editar/{id}',[AutoAdminController::class, 'update'])->name('ActualizarAutomotor');
});

//Titulares sin que el usuario se autentique
Route::controller(TitularController::class)->group(function () {
    //Lista de titulares
    Route::get('/titulares', [TitularController::class, 'Index'])->name('ListaTitular');
    //Detalle del titular
    Route::get('/titulares/{id}', [TitularController::class, 'show'])->name('DetalleTitular');
});

//Titulares usuario autentificado
//Lista de titulares
Route::get('dashboard/titulares', [TitularAdminController::class, 'Index'])->name('ListaAdminTitular');
Route::get('dashboard/titulares/{id}', [TitularAdminController::class, 'show'])->name('DetalleAdminTitulares');

//Infracciones
Route::controller(TitularController::class)->group(function () {
    //Lista de infraciones
    Route::get('/infraccion', [InfraccionController::class, 'Index'])->name('ListaInfraccion');
    //Detalle de infraccion
    Route::get('/infraccion/{id}', [InfraccionController::class, 'show'])->name('DetalleInfraccion');
});

//Infracciones usuario autentificado
//Lista de infracciones
Route::get('dashboard/infraccion', [InfraccionAdminController::class, 'Index'])->name('ListaAdminInfraccion');
Route::get('dashboard/infraccion/{id}', [InfraccionAdminController::class, 'show'])->name('DetalleAdminInfraccion');

//Autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
