<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::join('clasificacion', 'clasificacion.id_clasificacion', '=', 'peliculas.id_clasificacion')
            ->join('generos', 'generos.id_genero', '=', 'peliculas.id_genero')
            ->join('idioma', 'idioma.id_idioma', '=', 'peliculas.id_idioma')
            ->join('directores', 'directores.id_director', '=', 'peliculas.id_director')
            ->join('personas', 'personas.id_personas', '=', 'directores.id_personas') // Corregido el campo id_personas
            ->select('peliculas.*', 'generos.desc_gen', 'idioma.desc_idioma', 'personas.Nombre', 'personas.ap', 'personas.am')
            ->get();

        return view('peliculasViews.dashPeliculas', compact('peliculas'));
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
    public function show(Pelicula $peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $peliculas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $peliculas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $peliculas)
    {
        //
    }
}
