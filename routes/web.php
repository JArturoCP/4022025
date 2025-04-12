<?php

use App\Http\Controllers\CiudadController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\IdiomaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('landing/cines');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashPeliculas', [DashPeliculasController::class, 'index'])->name('peliculasViews.dashPeliculas');


Route::resource('ciudad', App\Http\Controllers\CiudadController::class);


Route::resource('dias', App\Http\Controllers\DiaController::class);

Route::resource('generos', App\Http\Controllers\GeneroController::class);

Route::resource('director', App\Http\Controllers\DirectorController::class);

Route::resource('idioma', App\Http\Controllers\IdiomaController::class);

Route::resource('clasificacion', App\Http\Controllers\ClasificacionController::class);

Route::resource('horas', App\Http\Controllers\HoraController::class);

Route::resource('protagonistas', App\Http\Controllers\ProtagonistasController::class);

Route::resource('personas', App\Http\Controllers\PersonasController::class);

Route::resource('proyecciones', App\Http\Controllers\ProyeccionController::class);

Route::resource('asigna_cartelera', App\Http\Controllers\AsignaCarteleraController::class);

Route::resource('cine', App\Http\Controllers\CineController::class);

Route::resource('peliculas', App\Http\Controllers\PeliculaController::class);

Route::get("cesar", function () {
    return view('cesar');
});

Route::get("emi", function () {
    return view('emi');
});

Route::get("carlos", function () {
    return view('carlos');
});

Route::get("erick", function () {
    return view('erick');
});

Route::get("uriel", function () {
    return view('uriel');
});

Route::get("ally", function () {
    return view('Alondra');
});
Route::get("maite", function () {
    return view('maite');
});

Route::get("arturo", function () {
    return view('arturo');
});

Route::get("chavez", function () {
    return view('chavez');
});

Route::get("adan", function () {
    return view('adan');
});

Route::get("jesusemiliano", function () {
    return view('jesusemiliano');
});

Route::get("imanol", function () {
    return view('imanol');
});

Route::get("ivonne", function () {
    return view('ivonne');
});

Route::get("diegocruz", function () {
    return view('diegocruz');
});

Route::get("luisroberto", function () {
    return view('luisroberto');
});

Route::get("alexis", function () {
    return view('alexis');
});

Route::get("roman", function () {
    return view('roman');
});

Route::get("adrian", function () {
    return view('Adrian');
});

Route::get("fatima", function () {
    return view('fatima');
});

Route::get("gael", function () {
    return view('gael');
});

Route::get("darina", function () {
    return view('darina');
});

Route::get("emmanuel", function () {
    return view('emmanuel');
});

Route::get("diego", function () {
    return view('diego');
});

Route::get("alberto", function () {
    return view('alberto');
});

Route::get("jesus", function () {
    return view('jesus');
});

Route::get("charbel", function () {
    return view('charbel');
});

Route::get('cines', function () {
    return view('cines');
});


Route::get("dashAsignaC", function () {
    return view('asigna_cartelera.dashAsignaC');
});

Route::get("dashPeliculas", function () {
    return view('peliculasViews.dashPeliculas');
})->name('peliculasViews.dashPeliculas');


Route::get("dashAsignaC", function () {

    return view('asigna_cartelera/dashAsignaC');

    return view('asigna_cartelera.dashAsignaC');
});
