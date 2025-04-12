{{-- resources/views/cines/index.blade.php --}}
@extends('layouts.asigna_cartelera')

@section('content')
    <h1>Cines</h1>

    <a href="{{ route('cine.create') }}" class="btn btn-primary">Agregar Cine</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cine as $cine)
            <tr>
                <td>{{ $cine->id_cine }}</td>
                <td>{{ $cine->nombre_c }}</td>
                <td>{{ $cine->dir }}</td>
                <td>{{ $cine->tel }}</td>
                <td>
                    <a href="{{ route('cine.edit', $cine->id_cine) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('cine.destroy', $cine->id_cine) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection