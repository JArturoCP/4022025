@extends('layouts.asigna_cartelera')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8 text-center">
            <h1 class="alert alert-success">Días</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8 text-center">
            <a href="{{ route('dias.create') }}" class="btn btn-success">Agregar Día</a>
        </div>
    </div>

    @if(session('success'))
        <div class="row justify-content-center mt-3">
            <div class="col-4 text-center">
                <p class="alert alert-success">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col" class="bg-success-subtle">Id_Día</th>
                    <th scope="col" class="bg-success-subtle">Descripción</th>
                    <th scope="col" class="bg-success-subtle text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dias as $dia)
                    <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td>{{ $dia->desc_dia }}</td>
                        <td class="text-center">
                            <a class="btn btn-warning me-2" href="{{ route('dias.edit', $dia->id_dia) }}">Editar</a>
                            <form action="{{ route('dias.destroy', $dia->id_dia) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
