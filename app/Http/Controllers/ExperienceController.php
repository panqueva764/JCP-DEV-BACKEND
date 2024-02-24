<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    /**
     * Obtiene todas las experiencias laborales.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $experiences = Experience::all();
        return response()->json($experiences);
    }

    /**
     * Crea una nueva experiencia laboral.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'duration' => 'required|string',
            'level' => 'required|string',
            'language' => 'required|array',
            'description' => 'nullable|string',
        ]);

        $experience = Experience::create([
            'name' => $request->name,
            'position' => $request->position,
            'duration' => $request->duration,
            'level' => $request->level,
            'language' => json_encode($request->language),
            'description' => $request->description,
        ]);

        return response()->json($experience, 201);
    }

    /**
     * Obtiene una experiencia laboral específica por su ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $experience = Experience::findOrFail($id);
        return response()->json($experience);
    }

    /**
     * Actualiza una experiencia laboral existente por su ID.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'duration' => 'required|string',
            'level' => 'required|string',
            'language' => 'required|array',
            'description' => 'nullable|string',
        ]);

        $experience = Experience::findOrFail($id);
        $experience->update([
            'name' => $request->name,
            'position' => $request->position,
            'duration' => $request->duration,
            'level' => $request->level,
            'language' => json_encode($request->language),
            'description' => $request->description,
        ]);

        return response()->json($experience, 200);
    }

    /**
     * Elimina una experiencia laboral existente por su ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();

        return response()->json(['message' => 'Experience deleted successfully'], 200);
    }
}
