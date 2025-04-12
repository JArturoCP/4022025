@extends('layouts.asigna_cartelera')

@section('content')
<div class="container">
    <h2>Asignación de Carteleras</h2>

    <!-- Mensaje de éxito, si existe -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Botón para Crear nueva asignación -->
    <a href="{{ route('asigna_cartelera.create') }}" class="btn btn-primary mb-3">Crear Nueva Cartelera</a>

    <!-- Tabla con todas las asignaciones -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Película</th>
                <th>Cine</th>
                <th>Día</th>
                <th>Hora</th>
                <th>Proyección</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asigna_cartelera as $asigna)
                <tr>
                    <td>{{ $asigna->id_asignac }}</td>
                    <td>{{ $asigna->titulo }}</td>
                    <td>{{ $asigna->nombre_c }}</td>
                    <td>{{ $asigna->desc_dia }}</td>
                    <td>{{ $asigna->descripcion_h }}</td>
                    <td>{{ $asigna->des_proy }}</td>
                    <td>{{ $asigna->fi }}</td>
                    <td>{{ $asigna->ff }}</td>
                    <td>
                        <!-- Botón para Editar -->
                        <a href="{{ route('asigna_cartelera.edit', $asigna->id_asignac) }}" class="btn btn-warning btn-sm">Editar</a>

                        <!-- Formulario de eliminación con método DELETE -->
                        <form action="{{ route('asigna_cartelera.destroy', $asigna->id_asignac) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta asignación?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
