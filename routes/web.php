<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('home.index');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Inicio', [PerfilController::class, 'index'])->name('inicio.index');
Route::post('/contact', [PerfilController::class, 'store'])->name('contact.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact/listado', [ContactController::class, 'listado'])->name('contact/listado.listado');
Route::get('/contacto/editar/{id}', [ContactController::class, 'actualizar_contacto'])->name('contacto_registro.actualizar_contacto');
Route::put('/contacto/editar/{contacto}', [ContactController::class, 'editar_contacto'])->name('contacto.editar_contacto');
Route::get('/mostrar-detalle-mensaje/{id}', [ContactController::class, 'mostrarDetalleMensaje'])->name('mostrar.detalle.mensaje');









