@extends('layouts.asigna_cartelera')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Editar Proyección</h1>
            <a href="{{ route('proyecciones.index') }}" class="btn btn-primary">Regresar</a>
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
            <form action="{{ route('proyecciones.update', $proyeccion->id_proyeccion) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="des_proy" class="form-label">Descripción de la proyección</label>
                    <input type="text" class="form-control" id="des_proy" name="des_proy" value="{{ $proyeccion->des_proy }}" required>
                    
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="precio" name="precio" value="{{ $proyeccion->precio }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>

        </div>
    </div>
@endsection
