<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stockB;

class StockBController extends Controller
{
    public function index()
    {
        $stockItems = stockB::with('bebida', 'bodega')->get();
        return view('stock.index', compact('stockItems'));
    }

    public function show($id)
    {
        $stockItem = stockB::with('bebida', 'bodega')->find($id);
        return view('stock.show', compact('stockItem'));
    }

    public function create()
    {
        $bebidas = Bebida::all();
        $bodegas = Bodega::all();
        return view('stock.create', compact('bebidas', 'bodegas'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'bebida_id' => 'required|exists:bebidas,id',
            'bodega_id' => 'required|exists:bodegas,id',
            'cantidad' => 'required|integer|min:0',
        ]);

        $stockItem = stockB::find($id);
        $stockItem->update($data);

        return redirect()->route('stock.index')->with('success', 'Registro de stock actualizado exitosamente.');
    }

    public function edit($id)
    {
        $stockItem = stockB::find($id);
        $bebidas = Bebida::all();
        $bodegas = Bodega::all();
        return view('stock.edit', compact('stockItem', 'bebidas', 'bodegas'));
    }

}


