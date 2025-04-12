{{-- resources/views/cines/edit.blade.php --}}
@extends('layouts.asigna_cartelera')

@section('content')
    <h1>Editar Cine</h1>

    <form action="{{ route('cine.update', $cine->id_cine) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nombre_c">Nombre del cine:</label>
            <input type="text" class="form-control" id="nombre_c" name="nombre_c" 
                   value="{{ $cine->nombre_c }}" required>
        </div>
        
        <div class="form-group">
            <label for="dir">Dirección:</label>
            <input type="text" class="form-control" id="dir" name="dir" 
                   value="{{ $cine->dir }}" required>
        </div>
        
        <div class="form-group">
            <label for="tel">Teléfono:</label>
            <input type="text" class="form-control" id="tel" name="tel" 
                   value="{{ $cine->tel }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection