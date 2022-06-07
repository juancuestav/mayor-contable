<?php

use App\Http\Controllers\MayorContableController;
use App\Http\Controllers\TmaPlanCtaController;
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

// Mayor auxiliar
Route::get('/filtrar', [MayorContableController::class, 'filtrar']);
Route::resource('/', MayorContableController::class)->only(['index', 'show']);

// Cuentas
Route::get('/cuentas/listar', [TmaPlanCtaController::class, 'listar']);
Route::resource('/cuentas', TmaPlanCtaController::class)->only(['show']);
