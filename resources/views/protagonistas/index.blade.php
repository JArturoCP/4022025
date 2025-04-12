@extends("layouts.peliculas")

@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Protagonistas</h1>
            <a href="{{ route('protagonistas.create') }}" class="btn btn-success">Agregar un protagonista</a>
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
                    <th>#</th>
                    <th>Nombre del protagonista</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($protagonistas as $protagonista)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $protagonista->nombre }}</td>
                        <td>{{ $protagonista->ap }}</td>
                        <td>{{ $protagonista->am }}</td>

                        <td>
                            <a class="btn btn-warning" href="{{ route('protagonistas.edit', $protagonista->id_protagonista) }}">Editar</a>
                            <form action="{{ route('protagonistas.destroy', $protagonista->id_protagonista) }}" method="POST" style="display:inline;">
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
