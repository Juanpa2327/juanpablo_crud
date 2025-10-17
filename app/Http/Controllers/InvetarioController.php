<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;

class InvetarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventarios = Inventario::all();
         return view('inventario.index', compact('inventarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inventario = new  Inventario();

        $inventario->nombre = $request['nombre'];
        $inventario->tipo = $request['tipo'];
        $inventario->descripcion = $request['descripcion'];
       
        $inventario->save();

        return redirect()->route('inventario.index')->with('success', 'Se ha Registrado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('inventario.search');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $inventario = Inventario::find($id);
         return view('inventario.update', compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inventario = Inventario::find($id);

        $inventario->nombre = $request['nombre'];
        $inventario->tipo = $request['tipo'];
        $inventario->descripcion = $request['descripcion'];
       
        $inventario->save();

        return redirect()->route('inventario.index')->with('success', 'Se ha Actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventario = Inventario::find($id);
          $inventario->delete();

        return redirect()->route('inventario.index')->with('danger', 'Registro eliminado existosamente');
    }
}
