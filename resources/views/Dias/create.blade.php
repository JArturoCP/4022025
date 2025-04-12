@extends('layouts.asigna_cartelera')

@section('content')
    <h1>Agregar Día</h1>

    <form action="{{ route('dias.store') }}" method="POST">
        @csrf

<div class="form-group">
    <label for="desc_dia">Descripción del Día:</label>
    <input type="text" id="desc_dia" name="desc_dia" class="form-control" required>
</div>

      
        @if ($errors->any())
<div class="alert alert-danger">
 <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
   @endif

<button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection

<!-- ESTE CODIGO ES DE DIA -->