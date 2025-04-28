@extends("layouts.peliculas")

@section("content")
<div class="row justify-content-center">
    <div class="col-8">
        <h1 class="alert alert-success">Directores</h1>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-8">
        <a href="{{route('director.create')}}" class="btn btn-success">Agregar Director</a>
    </div>
</div>

@if(session('success'))
<div class="row justify-content-center">
    <div class="col-4">
        <p class="alert alert-success">{{ session('success') }}</p>
    </div>
</div>
@endif

<div class="row justify-content-center mt-5">
    <div class="col-8">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del director</th>
                </tr>
            </thead>
            <tbody>
                @foreach($directores as $director)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{ $director->nombre_director }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('director.edit', $director->id_director) }}">Editar</a>
                        <form action="{{ route('director.destroy', $director->id_director) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection