<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\HoraController;
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
    return view('welcome');
});

Route::get('/horas', [HoraController::class, 'index'])->middleware(['auth', 'verified'])->name('horas');

Route::get('/horas/crear', [HoraController::class, 'create'])->middleware(['auth', 'verified'])->name('horas.crear');

Route::post('/horas/crear',  [HoraController::class, 'store'])->middleware(['auth', 'verified'])->name('horas.guardar');

Route::get('/horas/eliminar/{horaH}/{diaH}/{codAsignatura}',  [HoraController::class, 'destroy'])->middleware(['auth', 'verified'])->name('horas.eliminar');


Route::get('/asignaturas', [AsignaturaController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaturas');

Route::get('/asignaturas/crear', [AsignaturaController::class, 'create'])->middleware(['auth', 'verified'])->name('asignaturas.crear');

Route::post('/asignaturas/crear',  [AsignaturaController::class, 'store'])->middleware(['auth', 'verified'])->name('asignaturas.crear');

Route::get('/asignaturas/ver/{codAs}', [AsignaturaController::class, 'show'])->middleware(['auth', 'verified'])->name('asignaturas.ver');

Route::get('/asignaturas/editar/{codAs}', [AsignaturaController::class, 'edit'])->middleware(['auth', 'verified'])->name('asignaturas.editar');

Route::put('/asignaturas/editar/{codAs}',  [AsignaturaController::class, 'update'])->middleware(['auth', 'verified'])->name('asignaturas.editar');

Route::get('/asignaturas/eliminar/{codAs}',  [AsignaturaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('asignaturas.eliminar');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
