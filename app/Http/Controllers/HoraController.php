<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $horas = Hora::all();
        //dd(hora::all());
        return view('horas.index', compact('horas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('horas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'descripcion_h' => 'required|string|max:100'
        ]);

        // Creación del horario
        Hora::create([
            'descripcion_h' => $request->descripcion_h
        ]);

        return redirect()->route('horas.index')->with('success', 'horario creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hora $hora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hora $hora)
    {

        return view('horas.edit', compact('hora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hora $hora)
    {
        $hora->update($request->all());
        return redirect()->route('horas.index')->with('success', 'horario actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hora $hora)
    {

        $hora->delete();
        return redirect()->route('horas.index')->with('success', 'Horario borrado correctamente.');
    }
}
