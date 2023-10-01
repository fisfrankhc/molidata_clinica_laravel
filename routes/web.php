<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SucursalesController;

use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuarios', UsuarioController::class);

Route::resource('roles', RolesController::class);

Route::resource('sucursales', SucursalesController::class);
/* ('/configuracion/usuarios/nuevo', [UsuarioController::class, 'store'])->name('usuariocreate'); */

/* Route::get('/configuracion/usuarios/{usuarioVistaId}', [UsuarioController::class, 'show']); */