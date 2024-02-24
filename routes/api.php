<?php

use App\Http\Controllers\TitleController;
use App\Http\Controllers\CertificateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

/*
|--------------------------------------------------------------------------
| API Response Routes
|--------------------------------------------------------------------------
|
| Here are the routes for managing API responses. These routes allow you
| to perform CRUD (Create, Read, Update, Delete) operations on API
| response data.
|
*/
Route::prefix('api-response')->group(function () {
    Route::get('/', [ResponseController::class, 'show']);
    Route::post('/', [ResponseController::class, 'store']);
    Route::put('/{id}', [ResponseController::class, 'update']);
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

/*
| Certificates Routes
|--------------------------------------------------------------------------
|
| Here are the routes for managing Certificates in the API. These routes allow
| you to perform CRUD (Create, Read, Update, Delete) operations on Certificates.
| All routes are prefixed with '/Certificates'.
|
*/
Route::prefix('certificates')->group(function () {
    Route::get('/', [CertificateController::class, 'index']);
    Route::post('/', [CertificateController::class, 'store']);
    Route::get('/{id}', [CertificateController::class, 'show']);
    Route::put('/{id}', [CertificateController::class, 'update']);
    Route::delete('/{id}', [CertificateController::class, 'destroy']);
});