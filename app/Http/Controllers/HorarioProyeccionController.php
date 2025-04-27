<?php

namespace App\Http\Controllers;

use App\Models\Horario_proyeccion;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class HorarioProyeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function calendario()
    {
        return view('proyecciones_horario.calendario');
    }

    public function horario($fecha)
    {
        $peliculas = Pelicula::all();
        return view('proyecciones_horario.horario', compact('fecha', 'peliculas'));
    }
    public function index()
    {
        //
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
    public function show(Horario_proyeccion $horario_proyeccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario_proyeccion $horario_proyeccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horario_proyeccion $horario_proyeccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horario_proyeccion $horario_proyeccion)
    {
        //
    }
}
