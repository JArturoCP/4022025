@extends('layouts.asigna_cartelera')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Editar horas</h1>
            <a href="{{route('horas.index')}}" class="btn btn-primary">Regresar</a>
        </div>   
    </div>    
    @if ($errors->any())
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="alert alert-danger">
                    <ul>                       
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>          
            </div>     
        </div>    
    @endif
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('horas.update', $hora->id_horas) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="descripcion_h" class="form-label">Descripción de horas</label>
                    <input type="text" class="form-control" id="descripcion_h" name="descripcion_h" value="{{ $hora->descripcion_h }}" >
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>        
        </div>    
    </div>
@endsection