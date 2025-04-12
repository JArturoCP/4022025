{{-- resources/views/cines/create.blade.php --}}
@extends('layouts.asigna_cartelera')

@section('content')
    <h1>Agregar Cine</h1>

    <a href="{{ route('cine.index') }}" class="btn btn-secondary">Regresar</a>

    <form action="{{ route('cine.store') }}" method="POST" class="mt-3">
        @csrf
        <div class="form-group">
            <label for="nombre_c">Nombre del cine:</label>
            <input type="text" class="form-control" id="nombre_c" name="nombre_c" required>
        </div>
        
        <div class="form-group">
            <label for="dir">Dirección:</label>
            <input type="text" class="form-control" id="dir" name="dir" required>
        </div>
        
        <div class="form-group">
            <label for="tel">Teléfono:</label>
            <input type="text" class="form-control" id="tel" name="tel" required>
        </div>
        
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection