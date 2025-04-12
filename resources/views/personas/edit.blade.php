@extends('layouts.peliculas')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Editar persona</h1>
            <a href="{{route('personas.index')}}" class="btn btn-primary">Regresar</a>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('personas.update', $persona->id_personas) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre de la persona</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $persona->Nombre }}" required>
                    <label for="ap" class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" id="ap" name="ap" value="{{ $persona->ap }}" required>
                    <label for="am" class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" id="am" name="am" value="{{ $persona->am }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection