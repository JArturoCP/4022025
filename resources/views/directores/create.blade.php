@extends('layouts.peliculas')

@section('content')


<div class="row justify-content-center">
    <div class="col-8">
        <h1 class="alert alert-success">Agregar Director</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <a href="{{route('director.index')}}" class="btn btn-primary">Regresar</a>
        </div>
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
        <form action="{{ route('director.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="id_persona" class="form-label">Identificador del director</label>
                <input type="text" class="form-control" id="id_persona" name="id_persona" value="{{ old('id_persona') }}">

                <label for="img_director" class="form-label">Imagen del Director</label>
                <input type="file" class="form-control" id="img_director" name="img_director" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>
</div>
@endsection