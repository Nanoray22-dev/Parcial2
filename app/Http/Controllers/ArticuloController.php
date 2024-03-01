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
        $articulo = Articulo::create($request->all());
        return response()->json($articulo, 201);
    }

    public function show($id)
    {
        $articulo = Articulo::findOrFail($id);
        return response()->json($articulo, 200);
    }

    public function update(Request $request, $id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->update($request->all());
        return response()->json($articulo, 200);
    }

    public function destroy($id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->delete();
        return response()->json(null, 204);
    }
}
