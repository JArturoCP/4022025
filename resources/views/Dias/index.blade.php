@extends('layouts.asigna_cartelera')

@section('content')
<div class="container mt-4">
    <h1 class="text-primary">Lista de Días</h1>

    <a href="{{ route('dias.create') }}" class="btn btn-success mb-3">Agregar Día</a>

    <div class="list-group">
        @foreach ($dias as $dia)
        <div class="list-group-item d-flex justify-content-between align-items-center">
            <span class="text-dark">{{ $dia->desc_dia }}</span>

            <div class="btn-group">
                <a href="{{ route('dias.edit', $dia->id_dia) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('dias.destroy', $dia->id_dia) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>


            </div>
        </div>
        @endforeach




    </div>
</div>
@endsection

<!-- ESTE CODIGO ES DE DIA -->