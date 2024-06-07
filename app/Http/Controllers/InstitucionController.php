<?php

namespace App\Http\Controllers;

use App\Models\Institucion;

use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    public function index()
    {
        $institucion = Institucion::all();
        return $institucion;
    }

    public function show($id)
    {
        $institucion = Institucion::findOrFail($id);
        return $institucion;
    }

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
        $institucion = Institucion::findOrFail($request->id);
        $institucion->codigo = $request->codigo;
        $institucion->nombre = $request->nombre;
        $institucion->status = $request->status;

        $institucion->save();

        return response([
            "status" => 1,
            "msg" => "¡Institución actualizada con Exito!"
        ]);
    }

    public function delete(Request $request)
    {
        $institucion = Institucion::destroy($request->id);
        return response([
            "msg" => "¡Institución eliminada con Exito!"
        ]);
    }
}
