@extends("layouts.asigna_cartelera")

@section("content")
<div class="row justify-content-center">
    <div class="col-8">
        <h1 class="alert alert-success">Proyecciones</h1>
        <a href="{{route('proyecciones.create')}}" class="btn btn-success"><i class="fa-solid fa-plus"></i>Agregar Proyección</a>
    </div>
</div>

@if(session('success'))
    <div class="row justify-content-center">
        <div class="col-4">
            <p class="alert alert-success">{{ session('success') }}</p>
        </div>
    </div>
@endif

<div class="row justify-content-center mt-5">
    <div class="col-8">
      <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Descripción de la proyección</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyeccion as $proyeccion)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{ $proyeccion->des_proy }}</td>
                    <td>{{ $proyeccion->precio }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('proyecciones.edit', $proyeccion->id_proyeccion) }}"><i class="fa-solid fa-pen-to-square"></i>Editar</a>
                        <form action="{{ route('proyecciones.destroy', $proyeccion->id_proyeccion) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i>Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection