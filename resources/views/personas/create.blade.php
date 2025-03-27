@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Agregar Persona</h1>
            <a href="{{route('personas.index')}}" class="btn btn-primary">Regresar</a>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre de la persona</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                    <label for="ap" class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" id="ap" name="ap" required>
                    <label for="am" class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" id="am" name="am" required>
                    
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection