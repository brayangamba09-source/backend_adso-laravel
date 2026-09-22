<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aprendiz;
use Illuminate\Http\Request;

class AprendizController extends Controller
{
    public function index()
    {
        return response()->json(Aprendiz::all());
    }

    public function show($id)
    {
        return response()->json(Aprendiz::findOrFail($id));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'email' => 'required|email',
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:200',
            'genero' => 'required|string',
            'ficha' => 'required|string',
            'jornada' => 'required|string',
            'tipo_documento' => 'required|string',
            'numero_documento' => 'required|string',
        ]);

        $aprendiz = Aprendiz::create($validated);
        return response()->json($aprendiz, 201);
    }

    public function update(Request $request, $id)
    {
        $aprendiz = Aprendiz::findOrFail($id);
        $aprendiz->update($request->all());
        return response()->json($aprendiz);
    }

    public function destroy($id)
    {
        Aprendiz::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}