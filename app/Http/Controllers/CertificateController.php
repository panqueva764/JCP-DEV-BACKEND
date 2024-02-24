<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    /**
     * Muestra todos los certificados.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $certificates = Certificate::all();
        $groupedCertificates = [];

        // Inicializa los grupos
        $groupedCertificates['Front'] = [];
        $groupedCertificates['Back'] = [];
        $groupedCertificates['BD'] = [];
        $groupedCertificates['Architecture'] = [];

        // Itera sobre los certificados y los agrupa por knowledge_type
        foreach ($certificates as $certificate) {
            switch ($certificate->knowledge_type) {
                case 'Front':
                    $groupedCertificates['Front'][] = $certificate;
                    break;
                case 'Back':
                    $groupedCertificates['Back'][] = $certificate;
                    break;
                case 'BD':
                    $groupedCertificates['BD'][] = $certificate;
                    break;
                case 'Architecture':
                    $groupedCertificates['Architecture'][] = $certificate;
                    break;
                default:
                    // Si hay un tipo desconocido, simplemente lo omitimos
                    break;
            }
        }

        // Ahora, los certificados están agrupados por knowledge_type en $groupedCertificates
        return response()->json($groupedCertificates);
    }

    /**
     * Crea un nuevo certificado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'platform' => 'required|string',
            'duration' => 'required|string',
            'level' => 'required|string',
            'language' => 'required|string',
            'knowledge_type' => 'required|string',
            'enabled' => 'required|boolean'
        ]);

        $certificate = Certificate::create($request->all());

        return response()->json($certificate, 201);
    }

    /**
     * Muestra un certificado específico por su ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $certificate = Certificate::findOrFail($id);
        return response()->json($certificate);
    }

    /**
     * Actualiza un certificado existente por su ID.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'platform' => 'required|string',
            'duration' => 'required|string',
            'level' => 'required|string',
            'language' => 'required|string',
            'knowledge_type' => 'required|string',
            'enabled' => 'required|boolean'
        ]);

        $certificate = Certificate::findOrFail($id);
        $certificate->update($request->all());

        return response()->json($certificate, 200);
    }

    /**
     * Elimina un certificado existente por su ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);
        $certificate->delete();

        return response()->json(['message' => 'Certificate deleted successfully'], 200);
    }
}

