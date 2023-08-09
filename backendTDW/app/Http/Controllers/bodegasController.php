<?php

namespace App\Http\Controllers;

use App\Models\bodegas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\bodegaRequest;

class bodegasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create(bodegaRequest $request)
    {
        try { 
            $bodega = new bodega();
            $bodega->nombre = $request->nombre;
            $bodega->sabor = $request->sabor;
            $bodega->litros = $request->litros;
            $bodega->stock = $request->stock;
            
            $bodega->save();
            return response()->json(["bodegas" => $bodega], Response::HTTP_OK);
        }catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(bodegas $bodegas)
    {
        $bodegas = bodegas::all();
        return response()->json(["bodegas" => $bodegas], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(bodegaRequest $request,bodegas $bodegas)
    // {
        
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bodegas $bodegas)
    {
        try {
            $bodega = bodega::find($id);
            $bodega->nombre = $request->nombre;
            $bodega->sabor = $request->sabor;
            $bodega->litros = $request->litros;
            $bodega->stock = $request->stock;
            $bodega->save();

            return response()->json(["bodega" => $bodega], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bodegas $bodegas)
    {
        try {
            $bodega = bodega::find($id);
            $bodega->delete();
            return response()->json(["bodega" => $bodega], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }
}
