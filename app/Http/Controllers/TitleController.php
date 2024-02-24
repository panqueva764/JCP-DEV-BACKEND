<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
    /**
     * Obtiene todos los títulos.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $titles = Title::all();
        return response()->json($titles);
    }

    /**
     * Crea un nuevo título.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'institution' => 'required|string',
            'year' => 'required|integer',
            'pdf_url' => 'required|string',
            'enabled' => 'required|boolean'
        ]);

        $title = Title::create([
            'name' => $request->name,
            'institution' => $request->institution,
            'year' => $request->year,
            'pdf_url' => $request->pdf_url,
            'enabled' => $request->enabled,
        ]);

        return response()->json($title, 201);
    }

    /**
     * Obtiene un título específico por su ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $title = Title::findOrFail($id);
        return response()->json($title);
    }

    /**
     * Actualiza un título existente por su ID.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'institution' => 'required|string',
            'year' => 'required|integer',
            'pdf_url' => 'required|string',
            'enabled' => 'required|boolean'

        ]);

        $title = Title::findOrFail($id);
        $title->update([
            'name' => $request->name,
            'institution' => $request->institution,
            'year' => $request->year,
            'pdf_url' => $request->pdf_url,
            'enabled' => $request->enabled,
        ]);

        return response()->json($title, 200);
    }

    /**
     * Elimina un título existente por su ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $title = Title::findOrFail($id);
        $title->delete();

        return response()->json(['message' => 'Title deleted successfully'], 200);
    }
}
