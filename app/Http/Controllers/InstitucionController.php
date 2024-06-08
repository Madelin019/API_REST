<?php

namespace App\Http\Controllers;

use App\Models\Institucion;

use Illuminate\Http\Request;

class InstitucionController extends Controller
{
     // Método para obtener y devolver todas las instancias del modelo Institucion.
    public function index()
    {
        $institucion = Institucion::all();
        return $institucion;
    }

    // Método para obtener y devolver una instancia específica de Institucion basada en su ID.
    public function show($id)
    {
        $institucion = Institucion::findOrFail($id);
        return $institucion;
    }

    // Método para crear una nueva instancia de Institucion y guardarla en la base de datos.
    public function create(Request $request)
    {
        $institucion = new Institucion();
        $institucion->codigo = $request->codigo;
        $institucion->nombre = $request->nombre;
        $institucion->status = $request->status;

        $institucion->save();

        return response([
            "status" => 1,
            "msg" => "¡Institución almacenada con Exito!"
        ]);
    }

    public function update(Request $request)
{
    // Busca la institución por su ID
    $institucion = Institucion::find($request->id);

    // Verifica si la institución existe
    if (!$institucion) {
        return response([
            "status" => 0,
            "msg" => "No se puede actualizar, id incorrecto o no existente"
        ]);
    }

    // Actualiza los datos de la institución
    $institucion->codigo = $request->codigo;
    $institucion->nombre = $request->nombre;
    $institucion->status = $request->status;

    // Guarda la institución actualizada en la base de datos
    $institucion->save();

    // Devuelve una respuesta indicando que la actualización fue exitosa
    return response([
        "status" => 1,
        "msg" => "¡Institución actualizada con éxito!"
    ]);
}


    public function delete(Request $request)
    {
        // Busca la institución por su ID
        $institucion = Institucion::find($request->id);
    
        // Verifica si la institución existe
        if (!$institucion) {
            return response([
                "msg" => "No existe o id incorrecto"
            ]);
        }
    
        // Elimina la institución si existe
        $institucion->delete();
    
        return response([
            "msg" => "¡Institución eliminada con éxito!"
        ]);
    }
    
}
