@extends('layouts.asigna_cartelera')

@section('content')
<div class="container">
    <h2>Crear Cartelera</h2>

    <form action="{{ route('asigna_cartelera.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_pelicula" class="form-label">Película</label>
            <select name="id_pelicula" id="id_pelicula" class="form-control">
                @foreach($peliculas as $pelicula)
                    <option value="{{ $pelicula->id_pelicula }}">{{ $pelicula->titulo }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_cine" class="form-label">Cine</label>
            <select name="id_cine" id="id_cine" class="form-control">
                @foreach($cines as $cine)
                    <option value="{{ $cine->id_cine }}">{{ $cine->nombre_c }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_dia" class="form-label">Día</label>
            <select name="id_dia" id="id_dia" class="form-control">
                @foreach($dias as $dia)
                    <option value="{{ $dia->id_dia }}">{{ $dia->desc_dia }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_hora" class="form-label">Hora</label>
            <select name="id_hora" id="id_hora" class="form-control">
                @foreach($horas as $hora)
                    <option value="{{ $hora->id_horas }}">{{ $hora->descripcion_h }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_proyeccion" class="form-label">Proyección</label>
            <select name="id_proyeccion" id="id_proyeccion" class="form-control">
                @foreach($proyecciones as $proyeccion)
                    <option value="{{ $proyeccion->id_proyeccion }}">{{ $proyeccion->des_proy }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fi" class="form-label">Fecha de inicio</label>
            <input type="date" class="form-control" name="fi" id="fi" required>
        </div>

        <div class="mb-3">
            <label for="ff" class="form-label">Fecha de fin</label>
            <input type="date" class="form-control" name="ff" id="ff" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
