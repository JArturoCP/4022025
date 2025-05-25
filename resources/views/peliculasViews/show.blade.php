@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('img/' . $pelicula->imagen) }}" class="img-fluid rounded" alt="{{ $pelicula->titulo }}">
        </div>
        <div class="col-md-8">
            <h2>{{ $pelicula->titulo }}</h2>
            <p><strong>Duración:</strong> {{ $pelicula->duracion }} minutos</p>

            <p><strong>Clasificación:</strong> 
                {{ $pelicula->clasificacion?->nombre ?? 'No especificada' }}
            </p>

            <p><strong>Género:</strong> 
                {{ $pelicula->genero?->nombre ?? 'No especificado' }}
            </p>

            <p><strong>Idioma:</strong> 
                {{ $pelicula->idioma?->nombre ?? 'No especificado' }}
            </p>

            <p><strong>Director:</strong> 
                {{ $pelicula->director?->nombre ?? 'No especificado' }}
            </p>

            <a href="{{ url()->previous() }}" class="btn btn-secondary">⬅ Volver</a>
        </div>
    </div>
</div>
@endsection
