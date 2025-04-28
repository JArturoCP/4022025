<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;



class GeneroController extends Controller
{

    // Muestra todos los géneros
    public function index()
    {
        $generos = Genero::all();
        //dd($generos);
        return view('generos.index', compact('generos'));
    }

    // Muestra el formulario de creación
    public function create()
    {
        return view('generos.create');
    }

    // Guarda un nuevo género en la base de datos
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre_genero' => 'required|string|max:100'
        ]);

        // Creación del género
        Genero::create([
            'nombre_genero' => $request->nombre_genero
        ]);

        return redirect()->route('generos.index')->with('success', 'Género creado correctamente');
    }

    // Elimina un género de la base de datos
    public function destroy(Genero $genero)
    {
        //dd($genero);

        $genero->delete();
        return redirect()->route('generos.index')->with('success', 'Genero borrado correctamente.');
    }

    // Modificar

    public function edit($id_genero)
    {
        $genero = Genero::findOrFail($id_genero);  // Buscar el género por su ID
        return view('generos.edit', compact('genero'));  // Pasamos el género a la vista edit
    }


    public function update(Request $request, $id_genero)
    {
        $request->validate([
            'nombre_genero' => 'required|string|max:100'
        ]);

        $genero = Genero::findOrFail($id_genero);  // Buscar el género por ID
        $genero->nombre_genero = $request->nombre_genero;  // Actualizar el nombre del género
        $genero->save();  // Guardar los cambios

        return redirect()->route('generos.index')->with('success', 'Género actualizado correctamente');
    }
}
