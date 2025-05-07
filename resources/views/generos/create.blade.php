@extends('layouts.peliculas')

@section('content')
<div class="row justify-content-center">
    <div class="col-8 text-center">
        <h1 class="alert alert-success">Agregar Genero</h1>
    </div>
</div>
<form action="{{ route('generos.store') }}" method="POST">
    @csrf

    <div class="row justify-content-center">
        <div class="col-6 text-center m-3"><label for="desc_gen" class="fs-4 text-dark ">Nombre del Género</label></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 text-center m-3"><input type="text" name="desc_gen" required></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 text-center m-3"><button type="submit" class="btn btn-success">Guardar</button></div>
    </div>



</form>
@endsection