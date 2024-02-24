<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DownloadPdfController extends Controller
{
    public function download(Request $request, $filename)
    {
        // Verificar si el archivo existe en la carpeta storage/app/pdf
        $filePath = storage_path('app/pdf/' . $filename);
        if (!Storage::exists('pdf/' . $filename)) {
            abort(404);
        }

        // Retornar la descarga del archivo PDF
        return response()->download($filePath, $filename, [], 'inline');
    }
}
