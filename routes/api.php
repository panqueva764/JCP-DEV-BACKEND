<?php

use App\Http\Controllers\TitleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


/*
|--------------------------------------------------------------------------
| Title Routes
|--------------------------------------------------------------------------
|
| Here are the routes for managing titles in the API. These routes allow
| you to perform CRUD (Create, Read, Update, Delete) operations on titles.
| All routes are prefixed with '/titles'.
|
*/
Route::prefix('titles')->group(function () {
    Route::get('/', [TitleController::class, 'index']);
    Route::post('/', [TitleController::class, 'store']);
    Route::get('/{id}', [TitleController::class, 'show']);
    Route::put('/{id}', [TitleController::class, 'update']);
    Route::delete('/{id}', [TitleController::class, 'destroy']);
});