@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8 text-center">
            <h1 class="alert alert-success">Agregar Horario</h1>
        </div>
    </div>
    <form action="{{ route('horas.store') }}" method="POST">
        @csrf

        <div class="row justify-content-center">
            <div class="col-6 text-center m-3"><label for="descripcion_h" class="fs-4 text-dark ">Horas:</label></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 text-center m-3"><input type="text" name="descripcion_h" required></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 text-center m-3"><button type="submit" class="btn btn-success">Guardar</button></div>
        </div>



    </form>
@endsection