<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/configuracion/usuarios', [UsuarioController::class, 'index'])->name('usuarios');

Route::get('/configuracion/usuarios/nuevo', [UsuarioController::class, 'create'])->name('usuarionuevo');
Route::post('/configuracion/usuarios/nuevo', [UsuarioController::class, 'store'])->name('usuario.datoregistrar');

Route::get('/configuracion/usuarios/{usuarioVistaId}', [UsuarioController::class, 'show']);