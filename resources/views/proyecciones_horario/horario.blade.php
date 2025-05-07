@extends('layouts.asigna_cartelera')

@section('content')
    <div class="container py-5">
        <h2>Asignar Cartelera para el día {{ $fecha }}</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered text-center align-middle">
            <thead class="table-dark">
            <tr>
                <th>Horario</th>
                <th>Película Asignada</th>
                <th>Proyeccion</th>
                <th>Clasificacion</th>
                <th>Acciones</th>
                
            </tr>
            </thead>
            <tbody>
            @foreach([
                ['07:00', '10:00'],
                ['10:00', '13:00'],
                ['13:00', '16:00'],
                ['16:00', '19:00'],
                ['19:00', '22:00'],
                ['22:00', '01:00']
            ] as $index => $horario)
                <tr>
                    <td class="bg-danger text-white">{{ $horario[0] }} - {{ $horario[1] }}</td>
                    <td>
                        {{-- Aquí deberías mostrar la película asignada si existe --}}
                        <select name="id_pelicula">
                            <option value="" selected disabled>Seleccionar</option>
                            @foreach($peliculas as $pelicula)
                                <option value="{{$pelicula->id_pelicula}}">{{$pelicula->titulo}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="id_proyeccion">
                            <option value="" selected disabled>Seleccionar</option>
                            @foreach($proyecciones as $proyeccion)
                                <option value="{{$proyeccion->id_proyeccion}}">{{$proyeccion->desc_proy}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="id_clasificacion" required>
                            <option value="" selected disabled>Seleccionar</option>
                            @foreach($clasificaciones as $clasificacion)
                                <option value="{{$clasificacion->id_clasificacion}}">{{$clasificacion->nom_clasifi}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <button class="btn btn-success btn-sm" onclick="asignarPelicula({{ $index }})">Agregar</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection
