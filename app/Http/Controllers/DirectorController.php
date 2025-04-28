<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $directores = Director::all();
        // dd($ciudades);

        return view('directores.index', compact('directores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('directores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_director' => 'required|max:10',
        ], [], [
            'nombre_director' => 'Nombre del director',
        ]);
        Director::create($request->all());
        return redirect()->route('director.index')->with('success', 'Director creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director)
    {
        return view("directores.edit", compact('director'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Director $director)
    {
        $request->validate([
            'nombre_director' => 'required|max:10',
        ], [], [
            'nombre_director' => 'Nombre del director',
        ]);
        //
        $director->update($request->all());

        return redirect()->route('director.index')->with('success', 'Director editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Director $director)
    {
        $director->delete();
        return redirect()->route('director.index')->with('success', 'Director borrado correctamente.');
    }
}
