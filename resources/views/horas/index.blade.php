@extends("layouts.asigna_cartelera")

@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Horarios</h1>
        </div>    
    </div>    
    <div class="row justify-content-around">
        <div class="col-8">
            <a href="{{route('horas.create')}}" class="btn btn-success">Agregar Horario</a>
        </div>    
    </div>    
    @if(session('success'))
        <div class="row ">
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
                    <th scope="col">Horario:</th>
                </tr>                
                </thead>                
                <tbody>
                @foreach($horas as $hora)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{ $hora->descripcion_h }}</td>

                        <td>
                            <a class="btn btn-warning" href="{{ route('horas.edit', $hora->id_horas) }}">Editar</a>
                            <form action="{{ route('horas.destroy', $hora->id_horas) }}" method="POST" style="display:inline;">
                        <td>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>                        
                        </td>   
                 @endforeach
@endsection