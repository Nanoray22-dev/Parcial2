<?php

namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function index()
    {
        $detallesVenta = DetalleVenta::all();
        return response()->json($detallesVenta, 200);
    }

    public function store(Request $request)
    {
        $detalleVenta = DetalleVenta::create($request->all());
        return response()->json($detalleVenta, 201);
    }

    public function show($id)
    {
        $detalleVenta = DetalleVenta::findOrFail($id);
        return response()->json($detalleVenta, 200);
    }

    public function update(Request $request, $id)
    {
        $detalleVenta = DetalleVenta::findOrFail($id);
        $detalleVenta->update($request->all());
        return response()->json($detalleVenta, 200);
    }

    public function destroy($id)
    {
        $detalleVenta = DetalleVenta::findOrFail($id);
        $detalleVenta->delete();
        return response()->json(null, 204);
    }

}
