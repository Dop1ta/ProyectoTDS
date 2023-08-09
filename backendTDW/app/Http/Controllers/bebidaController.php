<?php

namespace App\Http\Controllers;

use App\Models\bebida;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\bebidaRequest;

class bebidaController extends Controller
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
    public function create(bebidaRequest $request)
    {
        try { 
            $bebida = new bebida();
            $bebida->nombre = $request->nombre;
            $bebida->sabor = $request->sabor;
            $bebida->litros = $request->litros;
            $bebida->stock = $request->stock;
            
            $bebida->save();
            return response()->json(["bebidas" => $bebida], Response::HTTP_OK);
        }catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
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
    public function show(bebida $bebida)
    {
        $bebida = bebida::all();
        return response()->json(["bebida" => $bebida], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(bebida $bebida)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bebida $bebida)
    {
        try {
            $bebida = bebida::find($id);
            $bebida->nombre = $request->nombre;
            $bebida->sabor = $request->sabor;
            $bebida->litros = $request->litros;
            $bebida->stock = $request->stock;
            $bebida->save();

            return response()->json(["bebida" => $bebida], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bebida $bebida)
    {
        try {
            $bebida = bebida::find($id);
            $bebida->delete();
            return response()->json(["bebida" => $bebida], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }
}
