<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\DocenteController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/grados', [GradoController::class, 'index'])->name('grados.index');
    Route::post('/grados/store', [GradoController::class, 'store'])->name('grados.store');
    Route::get('/grados/edit/{grado}', [GradoController::class, 'edit'])->name('grados.edit');
    Route::put('/grados/update/{grado}', [GradoController::class, 'update'])->name('grados.update');
    Route::delete('/grados/destroy/{grado}', [GradoController::class, 'destroy'])->name('grados.destroy');

    Route::get('/aulas', [AulaController::class, 'index'])->name('aulas.index');
    Route::post('/aulas/store', [AulaController::class, 'store'])->name('aulas.store');
    Route::get('/aulas/edit/{aula}', [AulaController::class, 'edit'])->name('aulas.edit');
    Route::put('/aulas/update/{aula}', [AulaController::class, 'update'])->name('aulas.update');
    Route::delete('/aulas/destroy/{aula}', [AulaController::class, 'destroy'])->name('aulas.destroy');
    
    Route::resource('/docentes', DocenteController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
