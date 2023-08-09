<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bebidaController;
use App\Http\Controllers\bodegasController;

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


Route::prefix('/bebida')->group(function () use ($router) {
    $router->post('create', [bebidaController::class, 'create']);
    $router->get('list', [bebidaController::class, 'show']);
    $router->put('update/{id}', [bebidaController::class, 'update']);
    $router->delete('delete/{id}', [bebidaController::class, 'destroy']);
});

Route::prefix('/bodega')->group(function () use ($router) {
    $router->post('create', [bodegasController::class, 'create']);
    $router->get('list', [bodegasController::class, 'show']);
    $router->put('update/{id}', [bodegasController::class, 'update']);
    $router->delete('delete/{id}', [bodegasController::class, 'destroy']);
});

Route::prefix('/stock')->group(function () use ($router) {
    $router->post('create', [stockBController::class, 'create']);
    $router->get('list', [stockBController::class, 'show']);
    $router->put('update/{id}', [stockBController::class, 'update']);
    $router->delete('delete/{id}', [stockBController::class, 'destroy']);
});