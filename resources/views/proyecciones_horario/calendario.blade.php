@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2>Seleccionar fecha de proyección</h2>

        <form id="formFecha" method="GET">
            <input type="date" class="form-control" id="fecha" required>
            <button type="submit" class="btn btn-primary mt-3">Continuar</button>
        </form>
    </div>

    <script>
        const form = document.getElementById('formFecha');
        const fechaInput = document.getElementById('fecha');

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const fecha = fechaInput.value;
            if (fecha) {
                window.location.href = `/proyecciones_horario/horario/${fecha}`;
            }
        });
    </script>
@endsection
