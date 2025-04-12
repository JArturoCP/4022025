@extends('layouts.peliculas')

@section('content')

<div class="container-fluid bg-light">
    <div class="row min-vh-100">
        <!-- Contenido Principal -->
        <div class="col-7 bg-secondary p-4 rounded">
            <div class="d-flex justify-content-between align-items-center bg-white p-3 rounded">
                <h3 class="fw-bold text-dark">Peliculas</h3>
                <input type="text" class="form-control w-25" placeholder="Buscar ...">
            </div>



            <div class="row mt-4">
                @if(isset($peliculas) && $peliculas->count() > 0)
                @foreach($peliculas as $pelicula)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="..." class="card-img-top" alt="imagen">
                        <div class="card-body">
                            <h3 class="card-title">{{$pelicula->titulo}}</h3>

                            <p class="card-text">
                            <ul>
                                <li>{{$pelicula->duracion}}</li>
                                <li>{{$pelicula->desc_gen}} </li>
                                <li>{{$pelicula->desc_idioma}}</li>
                                <li>{{$pelicula->nom}}</li>
                                <li>{{$pelicula->ap}}</li>
                                <li>{{$pelicula->am}}</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

                <!-- Tabla de últimos movimientos -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card p-3 ">
                            <h5 class="fw-bold">Proyecciones</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pelicula</th>
                                        <th>Genero</th>
                                        <th>Clasificacion</th>
                                        <th>Idioma</th>
                                        <th>Duracion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Duro de matar</td>
                                        <td>Accion</td>
                                        <td>B15</td>
                                        <td>Español</td>
                                        <td>2:30 h</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>La forma del agua</td>
                                        <td>Romance</td>
                                        <td>B15</td>
                                        <td>Español</td>
                                        <td>3:00 h</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>The martian</td>
                                        <td>Ciencia ficcion</td>
                                        <td>B</td>
                                        <td>Ingles</td>
                                        <td>2:50 h</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>En las montañas de la locura</td>
                                        <td>Terror</td>
                                        <td>C</td>
                                        <td>Ingles</td>
                                        <td>3:00 h</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Sin novedad en el frente</td>
                                        <td>Belico</td>
                                        <td>D</td>
                                        <td>Español</td>
                                        <td>3:00 h</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tercera Columna -->
            <div class="col p-4 bg-light">
                <div class="card p-3 text-center bg-secondary text-white">
                    <h5 class="fw-bold">Capacidad de los cines</h5>
                    <div class="progress">
                        <div class="progress-bar " style="width: 50%">50%</div>
                    </div>
                </div>

                <div class="card p-3 mt-4 bg-secondary text-white">
                    <h5 class="fw-bold">Notificaciones</h5>
                    <ul>
                        <li>Actualización del sistema disponible</li>
                        <li>Se detectó un problema en la sala 2</li>
                        <li>Se programó un mantenimiento del servidor</li>
                    </ul>
                </div>

                <div class="card p-3 mt-4 bg-secondary text-white">
                    <h5 class="fw-bold">Personal</h5>
                    <ul>
                        <li>Arturo Carbajal - Admin</li>
                        <li>Javier Chávez - Developer</li>
                        <li>Ádan López - Support</li>
                        <li>Imanol - Tecnico en proyectores</li>
                        <li>Emiliano Menchaca - Conserje</li>
                        <li>Gael - Actor de la morsa</li>
                    </ul>
                </div>

                <div class="card p-3 mt-4 text-center bg-secondary text-white">
                    <h5 class="fw-bold">Acciones rapidas</h5>
                    <button class="btn  w-100 my-2 bg-white text-dark">Añadir pelicula</button>
                    <button class="btn  w-100 my-2 bg-white text-dark">Generar boletos</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8 justify-content-center text-center">
            <h1 class="">Imagenes</h1>
            <a href="{{route('peliculas.create')}}" class="btn btn-success">Agregar Imagen</a>
        </div>
    </div>
    @endsection