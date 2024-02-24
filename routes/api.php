<?php

use App\Http\Controllers\DownloadPdfController;
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
| PDF Download Route
|--------------------------------------------------------------------------
|
| This route handles the download of PDF files. It allows users to
| download PDF documents stored in the system. The route is typically
| accessed via a GET request with the PDF file identifier as a parameter.
|
*/
Route::get('/download-pdf/{filename}', [DownloadPdfController::class, 'download']);

