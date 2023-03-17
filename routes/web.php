<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::middleware('guest')
    ->group(function () {
        Route::post('/recovery/email', [UserController::class, 'recoveryMail'])->name('recovery.mail');
        Route::view('/reset/password', 'auth.passwords.reset')->name('reset.view');
        Route::post('/reset/password', [UserController::class, 'resetPassword'])->name('reset.password');
    });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categorias', [CargoController::class, 'index'])->name('cargos.index');
Route::get('/perfiles', [ProfileController::class, 'index'])->name('profiles.index');

Route::get('/evaluacion', [EvaluacionController::class, 'index'])->name('evaluacion.index');
Route::get('/evaluacion/{profile}', [EvaluacionController::class, 'evaluar'])->name('evaluacion.form');
Route::post('/realtimeStore', [EvaluacionController::class, 'realtimeStore'])->name('evaluacion.realtimeStore');
Route::post('/store', [EvaluacionController::class, 'store'])->name('evaluacion.store');
Route::get('/evaluaciones',[EvaluacionController::class,'evaluaciones'])->name('evaluacion.evaluaciones');
Route::get('/export',[EvaluacionController::class,'export'])->name('evaluacion.export');
