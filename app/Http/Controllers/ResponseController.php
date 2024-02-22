<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiResponse;

class ResponseController extends Controller
{
    /**
     * Guarda el JSON en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) {
        // Obtener el JSON del cuerpo de la solicitud
        $jsonData = $request->getContent();

        // Guardar el JSON en la base de datos
        $apiResponse = ApiResponse::create([
            'json_data' => $jsonData,
            'response_data' => '{}', // Establecer un valor predeterminado para 'response_data'
        ]);

        // Retornar una respuesta JSON con el mensaje de éxito
        return response()->json(['message' => 'JSON guardado correctamente'], 201);
    }

    /**
     * Obtiene el JSON almacenado en la base de datos.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show() {
        // Obtener el último registro de ApiResponse
        $apiResponse = ApiResponse::latest()->first();

        // Verificar si se encontró un registro
        if (!$apiResponse) {
            return response()->json(['message' => 'No se encontró ningún JSON en la base de datos'], 404);
        }

        // Retornar el JSON almacenado en la base de datos
        return response()->json(json_decode($apiResponse->json_data, true));
    }

    /**
     * Actualiza el JSON almacenado en la base de datos.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id) {
        // Validar la solicitud y asegurarnos de que contiene el JSON
        $request->validate([
            'json' => ['nullable', 'array'], // Hacer que el campo 'json' sea opcional
        ]);

        // Buscar el recurso por su ID
        $apiResponse = ApiResponse::find($id);

        // Verificar si el recurso existe
        if (!$apiResponse) {
            return response()->json(['message' => 'Recurso no encontrado'], 404);
        }

        // Actualizar los datos del recurso
        $apiResponse->json_data = $request->getContent();;
        $apiResponse->edited_at = now(); // Opcional: registrar la fecha de edición

        // Guardar los cambios
        $apiResponse->save();

        // Retornar una respuesta JSON con el mensaje de éxito
        return response()->json(['message' => 'Recurso actualizado correctamente'], 200);
    }
}
