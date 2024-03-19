<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $productos = Producto::all();
            //lo vamos a convertir en un arreglo
            $response = $productos->toArray();
            $i=0;
            foreach($productos as $producto){
                $response[$i]["clasificacion"]= $producto->clasificacion->array();
                $response[$i]["categoria"]= $producto->categoria->toArray();
                $response[$i]["marca"]= $producto->marca->toArray();
                $response[$i]["imagenes"] = $producto->imagenes->toArray();
                $i++;
            }
            return response()->json($response);
        }catch(\Exception $e){
            return $e->getMessage();
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
