<?php

namespace App\Http\Controllers;

use App\Models\DetalleIngreso;
use Illuminate\Http\Request;

class DetalleIngresoController extends Controller
{
    public function index()
    {
        $detallesIngreso = DetalleIngreso::all();
        return response()->json($detallesIngreso, 200);
    }

    public function store(Request $request)
    {
        $detalleIngreso = DetalleIngreso::create($request->all());
        return response()->json($detalleIngreso, 201);
    }

    public function show($id)
    {
        $detalleIngreso = DetalleIngreso::findOrFail($id);
        return response()->json($detalleIngreso, 200);
    }

    public function update(Request $request, $id)
    {
        $detalleIngreso = DetalleIngreso::findOrFail($id);
        $detalleIngreso->update($request->all());
        return response()->json($detalleIngreso, 200);
    }

    public function destroy($id)
    {
        $detalleIngreso = DetalleIngreso::findOrFail($id);
        $detalleIngreso->delete();
        return response()->json(null, 204);
    }
}
