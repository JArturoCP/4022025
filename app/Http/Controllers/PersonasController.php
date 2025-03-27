<?php

namespace App\Http\Controllers;

use App\Models\personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $personas = personas::all();
       return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        personas::create($request->all());
        return redirect()->route('personas.index')->with('success', 'Persona agregada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(personas $personas)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(personas $persona)
    {

        return view('personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, personas $persona)
    {
        $persona->update($request->all());
        return redirect()->route('personas.index')->with('success', 'Persona actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(personas $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('success', 'Persona eliminada correctamente');
    }
}
