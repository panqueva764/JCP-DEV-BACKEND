<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiResponse;

class WelcomeController extends Controller
{
    public function index()
    {
        $response = ApiResponse::first(); // Obtener el primer registro de la tabla
        
        if ($response) {
            return response()->json($response->json_data);
        } else {
            return response()->json(['message' => 'No response found'], 404);
        }
    }
}
