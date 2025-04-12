<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use Illuminate\Http\Request;

class CineController extends Controller
{
    public function index()
    {
        $cine = Cine::all();
        return view('cines.index', compact('cine'));
    }

    public function create()
    {
        return view('cines.create');
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

    public function edit($id)
    {
        $cine = Cine::findOrFail($id);
        return view('cines.edit', compact('cine'));
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