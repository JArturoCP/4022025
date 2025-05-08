<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\Producto;
use App\Models\Protagonistas;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $directores = Director::join('personas', 'personas.id_personas', '=', 'directores.id_persona')
            ->select('personas.nombre', 'personas.ap', 'personas.am', 'directores.*')
            ->get();
        

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
            'id_persona' => 'required|exists:personas,id_personas',
        ]);

        $director=Director::create([
            'id_persona'=>$request->id_persona,
            'img_director'=>$request->img_director
        ]);

        if ($request->hasFile('img_director')) {
            $filePath = $request->file('img_director')->store('uploads', 'public');
        }

        $director->img_director = $filePath;
        $director->save();

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
            'id_persona' => 'required|exists:personas,id_personas',
        ]);

        $director->id_persona = $request->id_persona;

        if ($request->hasFile('img_director')) {
            if ($director->img_director) {
                $oldImagePath = storage_path('app/public/' . $director->img_director);

                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);  // Eliminar la imagen anterior
                }
            }
            $newImagePath = $request->file('img_director')->store('uploads', 'public');
            $director->img_director = $newImagePath;
        }

        $director->save();

        return redirect()->route('director.index')->with('success', 'Director actualizado correctamente');
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
