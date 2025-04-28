@extends('layouts.app')

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
                        <span id="pelicula_{{ $index }}">Sin asignar</span>
                    </td>
                    <td>
                        <button class="btn btn-success btn-sm" onclick="asignarPelicula({{ $index }})">Agregar</button>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


@endsection
