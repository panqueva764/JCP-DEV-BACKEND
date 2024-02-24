<?php

use App\Http\Controllers\ExperienceController;
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
| Experience Routes
|--------------------------------------------------------------------------
|
| Here are the routes for managing experiences in the API. These routes allow
| you to perform CRUD (Create, Read, Update, Delete) operations on experiences.
| All routes are prefixed with '/experiences'.
|
*/
Route::prefix('experiences')->group(function () {
    Route::get('/', [ExperienceController::class, 'index']);
    Route::post('/', [ExperienceController::class, 'store']);
    Route::get('/{id}', [ExperienceController::class, 'show']);
    Route::put('/{id}', [ExperienceController::class, 'update']);
    Route::delete('/{id}', [ExperienceController::class, 'destroy']);
});
