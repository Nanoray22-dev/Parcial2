<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
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
        $request->validate(['nombre' => 'required', 'apellido' => 'required', 'sexo' => 'required', 'fecha_nacimiento' => 'required','tipo_documento' => 'required','num_documento' => 'required','direccion' => 'required','telefono' => 'required','email' => 'required']);

        $clientes = Cliente::create($request->all());
        return response()->json(['clientes' => $clientes]);


    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $clientes = Cliente::findOrFail($id);
        return response()->json($clientes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
      
        $request->validate(['nombre' => 'required', 'apellido' => 'required', 'sexo' => 'required', 'fecha_nacimiento' => 'required','tipo_documento' => 'required','num_documento' => 'required','direccion' => 'required','telefono' => 'required','email' => 'required' . $id]);
        
        $clientes = Cliente::findOrFail($id);
        $clientes->update($request->all());
        return response()->json($clientes);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $clientes = Cliente::findOrFail($id);
        $clientes->delete();
        return 'El registro se borro correctamente';
    
    }
}
