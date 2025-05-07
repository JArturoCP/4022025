<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{


    public function index()
    {
        $generos = Genero::all();
        //dd($generos);
        return view('generos.index', compact('generos'));
    }


    public function create()
    {
        return view('generos.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'desc_gen' => 'required|string|max:100'
        ], [], [
            'desc_gen' => 'Nombre del genero',
        ]);

        Genero::create($request->all());
        return redirect()->route('generos.index')->with('success', 'Género creado correctamente');
    }


    // Elimina un género de la base de datos
    public function destroy(Genero $genero)
    {
        //dd($genero);

        $genero->delete();
        return redirect()->route('generos.index')->with('success', 'Genero borrado correctamente.');


    }

    public function show(Genero $genero) {

    }

    public function edit(Genero $genero)
    {

        return view('generos.edit', compact('genero'));

    }

    public function update(Request $request, Genero $genero)
    {
        $request->validate([
            'desc_gen' => 'required|string|max:100'
        ]);

        $genero->update($request->all());

        return redirect()->route('generos.index')->with('success', 'Género actualizado correctamente');
    }
}
