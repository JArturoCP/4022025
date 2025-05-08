@extends('layouts.peliculas')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <h1 class="alert alert-success">Editar Director</h1>
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
        <form action="{{ route('director.update',$director->id_director) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="id_persona" class="form-label">Nombre del director</label>
                <input type="text" class="form-control" id="id_persona" name="id_persona" aria-describedby="emailHelp" value="{{$director->id_persona}}">

                <label for="img_director" class="form-label">Imagen del Director</label>
                <input type="file" class="form-control" id="img_director" name="img_director" accept="image/*">

                @if($director->img_director)
                    <div class="mt-2">
                        <p>Imagen Actual:</p>
                        <img src="{{ asset('storage/' . $director->img_director) }}" alt="Imagen del director" width="100" height="100">
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>
</div>
@endsection