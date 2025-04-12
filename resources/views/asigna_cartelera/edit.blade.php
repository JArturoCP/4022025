@extends('layouts.asigna_cartelera')

@section('content')
<div class="container">
    <h2>Editar Cartelera</h2>

    <form action="{{ route('asigna_cartelera.update', $asignaCartelera->id_asignac) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="id_pelicula" class="form-label">Película</label>
            <select name="id_pelicula" id="id_pelicula" class="form-control">
                @foreach($peliculas as $pelicula)
                    <option value="{{ $pelicula->id_pelicula }}" {{ $pelicula->id_pelicula == $asignaCartelera->id_pelicula ? 'selected' : '' }}>
                        {{ $pelicula->titulo }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_cine" class="form-label">Cine</label>
            <select name="id_cine" id="id_cine" class="form-control">
                @foreach($cines as $cine)
                    <option value="{{ $cine->id_cine }}" {{ $cine->id_cine == $asignaCartelera->id_cine ? 'selected' : '' }}>
                        {{ $cine->nombre_c }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_dia" class="form-label">Día</label>
            <select name="id_dia" id="id_dia" class="form-control">
                @foreach($dias as $dia)
                    <option value="{{ $dia->id_dia }}" {{ $dia->id_dia == $asignaCartelera->id_dia ? 'selected' : '' }}>
                        {{ $dia->desc_dia }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_hora" class="form-label">Hora</label>
            <select name="id_hora" id="id_hora" class="form-control">
                @foreach($horas as $hora)
                    <option value="{{ $hora->id_horas }}" {{ $hora->id_horas == $asignaCartelera->id_hora ? 'selected' : '' }}>
                        {{ $hora->descripcion_h }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_proyeccion" class="form-label">Proyección</label>
            <select name="id_proyeccion" id="id_proyeccion" class="form-control">
                @foreach($proyecciones as $proyeccion)
                    <option value="{{ $proyeccion->id_proyeccion }}" {{ $proyeccion->id_proyeccion == $asignaCartelera->id_proyeccion ? 'selected' : '' }}>
                        {{ $proyeccion->des_proy }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fi" class="form-label">Fecha de inicio</label>
            <input type="date" class="form-control" name="fi" id="fi" value="{{ $asignaCartelera->fi }}" required>
        </div>

        <div class="mb-3">
            <label for="ff" class="form-label">Fecha de fin</label>
            <input type="date" class="form-control" name="ff" id="ff" value="{{ $asignaCartelera->ff }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
