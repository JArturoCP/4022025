<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use App\Models\Ciudad;
use Illuminate\Http\Request;

class CineController extends Controller
{
    public function index()
    {

        $cines = Cine::join('ciudades', 'ciudades.id_ciudad', '=', 'cines.id_ciudad')
            ->get();
        return view('cines.index', compact('cines'));
    }

    public function create()
    {
        $ciudades= Ciudad::all();
        return view('cines.create',compact('ciudades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_c' => 'required|unique:cines,nombre_c|max:200',
            'dir' => 'required|max:200',
            'tel' => 'required|max:20'
        ]);

        Cine::create($request->all());

        return redirect()->route('cine.index')
            ->with('success', 'Cine creado correctamente.');
    }

    public function edit(Cine $cine)
    {
        $ciudades = Ciudad::all();
        return view('cines.edit', compact('cine','ciudades'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_c' => 'required|max:200|unique:cines,nombre_c,'.$id.',id_cine',
            'dir' => 'required|max:200',
            'tel' => 'required|max:20'
        ]);

        $cine = Cine::findOrFail($id);
        $cine->update($request->all());

        return redirect()->route('cine.index')
            ->with('success', 'Cine actualizado correctamente.');
    }

    public function destroy($id)
    {
        $cine = Cine::findOrFail($id);
        $cine->delete();

        return redirect()->route('cine.index')
            ->with('success', 'Cine eliminado correctamente.');
    }
}
