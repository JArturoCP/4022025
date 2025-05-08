@extends("layouts.asigna_cartelera")

@section("content")
<div class="row justify-content-center">
    <div class="col-10">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="alert alert-success w-100 text-center">Proyecciones</h1>
        </div>
        <div class="mb-3 text-end">
            <a href="{{route('proyecciones.create')}}" class="btn btn-success shadow-sm rounded-pill">
                <i class="fa-solid fa-plus"></i> Agregar Proyección
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif

        <div class="card shadow-sm rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle text-center">
                    <thead class="table-dark rounded-top">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proyecciones as $proyeccion)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $proyeccion->desc_proy }}</td>
                                <td>${{ number_format($proyeccion->precio, 2) }}</td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm me-1" href="{{ route('proyecciones.edit', $proyeccion->id_proyeccion) }}">
                                        <i class="fa-solid fa-pen-to-square"></i> Editar
                                    </a>
                                    <form action="{{ route('proyecciones.destroy', $proyeccion->id_proyeccion) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('¿Estás seguro de eliminar esta proyección?')">
                                            <i class="fa-solid fa-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @if($proyecciones->isEmpty())
                            <tr>
                                <td colspan="4" class="text-muted">No hay proyecciones registradas.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
