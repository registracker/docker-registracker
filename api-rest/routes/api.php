<?php

use App\Http\Controllers\Api\ZonaController;
use App\Http\Controllers\Api\DepartamentoController;
use App\Http\Controllers\Api\MunicipioController;
use App\Http\Controllers\Api\GeneroController;
use App\Http\Controllers\Api\UniversidadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['as' => 'api.'], function () {
    /**
     * TODO
     * Remover metodos innecesarios de los resources
     */
    Orion::resource('zonas', ZonaController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('departamentos', DepartamentoController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('municipios', MunicipioController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('generos', GeneroController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('universidades', UniversidadController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);

    /**
     * TODO
     * Revisar la documentación para verificar las relaciones
     * No es necesario incluirlo ya que se puede agregar cómo parametro en la asociación
     */

    // Orion::hasManyResource('zonas', 'departamentos', ZonaDepartamentoController::class);
    // Orion::hasManyResource('departamentos', 'municipios', DepartamentoMunicipioController::class);
});
