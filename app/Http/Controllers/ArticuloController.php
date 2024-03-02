<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::all();
        return response()->json($articulos, 200);
    }

    public function store(Request $request)
    {


        $request->validate([
            'codigo' => 'required', 
            'nombre' => 'required', 
            'descripcion' => 'required', 
            'imagen' => 'required'
        ]);

        $articulos = Articulo::create($request->all());
        return response()->json(['articulos' => $articulos]);
    }

    public function show($id)
    {
        $articulo = Articulo::findOrFail($id);
        return response()->json($articulo, 200);
    }
    public function update(Request $request,  $id)
    {
        $request->validate([
            'codigo' => 'required', 
            'nombre' => 'required', 
            'descripcion' => 'required', 
            'imagen' => 'required' . $id,
        ]);


        $articulos = Articulo::findOrFail($id);
        $articulos->update($request->all());
        return response()->json($articulos);
    }

    public function destroy($id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->delete();
        return response()->json(null, 204);
    }
}
