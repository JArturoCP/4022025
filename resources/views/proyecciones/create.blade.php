@extends('layouts.asigna_cartelera')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Agregar Proyección</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('proyecciones.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('proyecciones.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="des_proy" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="des_proy" name="des_proy" required>
                </div>
                
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio" required>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection