<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ciudades = Ciudad::all();
        // dd($ciudades);

        return view('ciudades.index', compact('ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ciudades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_ci' => 'required|max:10',
        ], [], [
            'nombre_ci' => 'Nombre de la ciudad',
        ]);
        Ciudad::create($request->all());
        return redirect()->route('ciudad.index')->with('success', 'Ciudad creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ciudad $ciudad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ciudad $ciudad)
    {
        return view("ciudades.edit", compact('ciudad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        $request->validate([
            'nombre_ci' => 'required|max:10',
        ], [], [
            'nombre_ci' => 'Nombre de la ciudad',
        ]);

        //return $request->all();
        $ciudad->update($request->all());

        return redirect()->route('ciudad.index')->with('success', 'Ciudad editada correctamente.');
    }


    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        //
        return redirect()->route('ciudad.index')->with('success', 'Ciudad borrada correctamente.');
    }
}
