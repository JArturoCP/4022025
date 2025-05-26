<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::with(['genero', 'clasificacion', 'idioma', 'director'])->get();
        return view('peliculasViews.dashPeliculas', compact('peliculas'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelicula::create($request->all());
        return redirect()->route('peliculas.index')->with('success', 'imagen agregada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pelicula = Pelicula::with(['genero', 'clasificacion', 'idioma', 'director'])->findOrFail($id);
        return view('peliculasViews.show', compact('pelicula'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
