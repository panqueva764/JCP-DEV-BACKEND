<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ResponseController;


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

/**
 * Obtiene la información de bienvenida para el front-end de la aplicación.
 *
 * @group Api Response
 */
Route::get('/api-response', [ResponseController::class, 'show']);

/**
 * Guarda la información de bienvenida para el front-end de la aplicación.
 *
 * @group Api Response
 */
Route::post('/api-response', [ResponseController::class, 'store']);

/**
 * Actualiza la información de bienvenida para el front-end de la aplicación.
 *
 * @group Api Response
 */
Route::put('/api-response/{id}', [ResponseController::class, 'update']);

