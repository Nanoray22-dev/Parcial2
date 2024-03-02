<?php

namespace App\Http\Controllers;

use App\Models\DetalleIngreso;
use Illuminate\Http\Request;

class DetalleIngresoController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalles = DetalleIngreso::all();
        return response()->json($detalles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['precio_compra' => 'required', 'precio_venta' => 'required', 'stock_inicial' => 'required', 'stock_actual' => 'required', 'fecha_produccion' => 'required', 'fecha_vencimiento' => 'required']);

        $detalles = DetalleIngreso::create($request->all());
        return response()->json(['detalles' => $detalles]);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $detalles = DetalleIngreso::findOrFail($id);
        return response()->json($detalles);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetalleIngreso $detalles_Ingresos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
    
        $request->validate(['precio_compra' => 'required', 'precio_venta' => 'required', 'stock_inicial' => 'required', 'stock_actual' => 'required', 'fecha_produccion' => 'required', 'fecha_vencimiento' => 'required' . $id]);

        $detalles = DetalleIngreso::findOrFail($id);
        $detalles->update($request->all());
        return response()->json($detalles);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $detalles = DetalleIngreso::findOrFail($id);
        $detalles->delete();
        return 'El registro se borro correctamente';
    }
}
