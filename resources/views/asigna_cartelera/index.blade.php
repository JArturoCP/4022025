@extends('layouts.asigna_cartelera')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="alert alert-primary w-100 text-center">Asignación de Carteleras</h2>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    @endif

    <div class="mb-3 text-end">
        <a href="{{ route('asigna_cartelera.create') }}" class="btn btn-success shadow-sm rounded-pill">
            <i class="fa-solid fa-plus"></i> Crear Nueva Cartelera
        </a>
    </div>

    <div class="card shadow-sm rounded-4">
        <div class="card-body">
            <table class="table table-hover align-middle text-center">
                <thead class="table-dark rounded-top">
                    <tr>
                        <th>#</th>
                        <th>Película</th>
                        <th>Cine</th>
                        <th>Día</th>
                        <th>Hora</th>
                        <th>Proyección</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($asigna_cartelera as $asigna)
                        <tr>
                            <td>{{ $asigna->id_asigna }}</td>
                            <td>{{ $asigna->titulo }}</td>
                            <td>{{ $asigna->nombre_c }}</td>
                            <td>{{ $asigna->desc_dia }}</td>
                            <td>{{ $asigna->descripcion_h }}</td>
                            <td>{{ $asigna->desc_proy }}</td>
                            <td>{{ $asigna->fi }}</td>
                            <td>{{ $asigna->ff }}</td>
                            <td>
                                <a href="{{ route('asigna_cartelera.edit', $asigna->id_asigna) }}" class="btn btn-outline-warning btn-sm me-1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('asigna_cartelera.destroy', $asigna->id_asigna) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta asignación?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if($asigna_cartelera->isEmpty())
                        <tr>
                            <td colspan="9" class="text-muted">No hay asignaciones de cartelera registradas.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

