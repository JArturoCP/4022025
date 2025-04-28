<?php

namespace App\Http\Controllers;

use App\Models\Proyeccion;
use Illuminate\Http\Request;

class ProyeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyecciones = Proyeccion::all(); // Obtén todas las proyecciones
        return view('proyecciones.index', compact('proyecciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyecciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'des_proy' => 'required|string|max:200',
            'precio' => 'required|numeric',
        ]);

        Proyeccion::create($request->all());

        return redirect()->route('proyecciones.index')->with('success', 'Proyección agregada correctamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Proyeccion $proyeccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proyeccion = Proyeccion::findOrFail($id);
        return view('proyecciones.edit', compact('proyeccion'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_proyeccion)
    {
        // Validaciones
        $validated = $request->validate([
            'des_proy' => 'required|string|max:255|unique:proyecciones,des_proy,' . $id_proyeccion . ',id_proyeccion', // Valida que la descripción sea única, excepto el registro actual
            'precio' => 'required|numeric|min:0', // Valida que el precio sea un número y mayor o igual a 0
        ]);

        // Encontrar la proyección por su ID
        $proyeccion = Proyeccion::findOrFail($id_proyeccion);

        // Actualizar los campos
        $proyeccion->des_proy = $request->des_proy;
        $proyeccion->precio = $request->precio;
        $proyeccion->save();

        // Redirigir con mensaje de éxito
        return redirect()->route('proyecciones.index')->with('success', 'Proyección actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_proyeccion)
    {
        // Encontramos la proyección por su ID
    $proyeccion = Proyeccion::find($id_proyeccion);

    // Verificamos si la proyección existe
    if ($proyeccion) {
        // Eliminamos el registro
        $proyeccion->delete();

        // Redirigimos con un mensaje de éxito
        return redirect()->route('proyecciones.index')->with('success', 'Proyección eliminada correctamente.');
    }

    // Si no se encuentra el registro, muestra un mensaje de error
    return redirect()->route('proyecciones.index')->with('error', 'No se encontró la proyección.');

    }
}
