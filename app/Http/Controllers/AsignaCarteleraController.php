<?php

namespace App\Http\Controllers;

use App\Models\AsignaCartelera;
use App\Models\Pelicula; // Importamos el modelo Pelicula
use App\Models\Cine;
use App\Models\Dia;
use App\Models\Hora;
use App\Models\Proyeccion;

class AsignaCarteleraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('asigna_cartelera.dashAsignaC');
    }

    public function index()
    {
        // Obtener todos los registros de asigna_cartelera con las relaciones necesarias
        $asigna_cartelera = AsignaCartelera::join('peliculas', 'peliculas.id_pelicula', '=', 'asigna_cartelera.id_pelicula')
        ->join('cines', 'cines.id_cine', '=', 'asigna_cartelera.id_cine')
        ->join('dias', 'dias.id_dia', '=', 'asigna_cartelera.id_dia')
        ->join('horas', 'horas.id_horas', '=', 'asigna_cartelera.id_horas') // Cambié id_hora por id_horas
        ->join('proyecciones', 'proyecciones.id_proyeccion', '=', 'asigna_cartelera.id_proyeccion')
        ->select('asigna_cartelera.*', 'peliculas.titulo', 'cines.nombre_c', 'dias.desc_dia', 'horas.descripcion_h', 'proyecciones.des_proy')
        ->get();


        return view('asigna_cartelera.index', compact('asigna_cartelera'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Cargar datos necesarios (como películas, cines, días, horas, proyecciones)
        $peliculas = Pelicula::all();  // Asegúrate de tener modelos cargados
        $cines = Cine::all();
        $dias = Dia::all();
        $horas = Hora::all();
        $proyecciones = Proyeccion::all();

        return view('asigna_cartelera.create', compact('peliculas', 'cines', 'dias', 'horas', 'proyecciones'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'id_pelicula' => 'required|exists:peliculas,id_pelicula',
            'id_cine' => 'required|exists:cines,id_cine',
            'id_dia' => 'required|exists:dias,id_dia',
            'id_hora' => 'required|exists:horas,id_hora',
            'id_proyeccion' => 'required|exists:proyecciones,id_proyeccion',
            'fi' => 'required|date',
            'ff' => 'required|date',
        ]);

        // Crear nuevo registro en la tabla asigna_cartelera
        AsignaCartelera::create($request->all());

        return redirect()->route('asigna_cartelera.index')->with('success', 'Cartelera asignada correctamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(AsignaCartelera $id)
    {
        return view('asigna_cartelera.show', ['asigna_cartelera' => $asigna_cartelera]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Buscar el registro a editar
        $asignaCartelera = AsignaCartelera::findOrFail($id);
        
        // Cargar datos necesarios
        $peliculas = Pelicula::all();
        $cines = Cine::all();
        $dias = Dia::all();
        $horas = Hora::all();
        $proyecciones = Proyeccion::all();

        return view('asigna_cartelera.edit', compact('asignaCartelera', 'peliculas', 'cines', 'dias', 'horas', 'proyecciones'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'id_pelicula' => 'required|exists:peliculas,id_pelicula',
            'id_cine' => 'required|exists:cines,id_cine',
            'id_dia' => 'required|exists:dias,id_dia',
            'id_hora' => 'required|exists:horas,id_hora',
            'id_proyeccion' => 'required|exists:proyecciones,id_proyeccion',
            'fi' => 'required|date',
            'ff' => 'required|date',
        ]);

        // Encontrar el registro a actualizar
        $asignaCartelera = AsignaCartelera::findOrFail($id);
        $asignaCartelera->update($request->all());

        return redirect()->route('asigna_cartelera.index')->with('success', 'Cartelera actualizada correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AsignaCartelera $asigna_cartelera)
    {
        $asigna_cartelera->delete();
        return redirect()->route('asigna_cartelera.index');
    }
}
