<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetalleIngresoController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\VentaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('articulos', ArticuloController::class);


Route::resource('clientes', ClienteController::class);


Route::resource('detalles-ingresos', DetalleIngresoController::class);


Route::resource('detalles-ventas', DetalleVentaController::class);


Route::resource('trabajador', TrabajadorController::class);


Route::resource('ventas', VentaController::class);