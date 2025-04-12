@extends('layouts.asigna_cartelera')

@section('content')
    <div class="max-w-lg mx-auto bg-blue-500 p-6 rounded-lg shadow-md mt-10">
        <h1 class="text-2xl font-bold text-gray-700 mb-4">Editar Día</h1>
        <form action="{{ route('dias.update', $dia->id_dia) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            
            
            <div>
                <label for="desc_dia" class="block text-sm font-medium text-gray-600">Descripción del Día</label>
                <input type="text" id="desc_dia" name="desc_dia"
                       value="{{ $dia->desc_dia }}" required
                       class="w-full p-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            
            
            
            <button type="submit"
                    class="w-full bg-blue-600 text-blue-700 py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                Actualizar
            </button>
          
            
        </form>
    </div>
@endsection

<!-- ESTE CODIGO ES DE DIA -->