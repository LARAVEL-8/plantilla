<?php

use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;
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
    //return view('welcome');
    return redirect()->route("home");
});

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* tipo usuario */
Route::get('/tipo-usuario', [TipoUsuarioController::class, 'index'])->name("tipo.index")->middleware('verified');
Route::post('/tipo-usuario-crear', [TipoUsuarioController::class, 'create'])->name("tipo.create")->middleware('verified');
Route::post('/tipo-usuario-actualizar-{id}', [TipoUsuarioController::class, 'update'])->name("tipo.update")->middleware('verified');
Route::get('/tipo-usuario-eliminar-{id}', [TipoUsuarioController::class, 'destroy'])->name("tipo.destroy")->middleware('verified');

/* usuario */
Route::get("/usuario", [UsuarioController::class, "index"])->name("usuario.index")->middleware("verified");
Route::get("/usuario-crear", [UsuarioController::class, "create"])->name("usuario.create")->middleware("verified");
Route::post("/usuario-registrar", [UsuarioController::class, "store"])->name("usuario.store")->middleware("verified");
Route::post("/usuarioActualizar", [UsuarioController::class, "update"])->name("usuario.update")->middleware('verified');
Route::get("/usuario-editar-{id}", [UsuarioController::class, "edit"])->name("usuario.edit")->middleware('verified');
Route::post("/usuario-modificarImagen", [UsuarioController::class, "actualizarImagen"])->name("usuario.actualizarImagen")->middleware('verified');
Route::get("/usuario-eliminarImagen-{id}", [UsuarioController::class, "eliminarImagen"])->name("usuario.eliminarImagen")->middleware('verified');
Route::get("/usuario-eliminar-{id}", [UsuarioController::class, "destroy"])->name("usuario.destroy")->middleware('verified');
