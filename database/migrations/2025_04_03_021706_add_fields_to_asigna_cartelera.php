<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('asigna_cartelera', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pelicula')->nullable();
            $table->unsignedBigInteger('id_cine')->nullable();
            $table->unsignedBigInteger('id_dia')->nullable();
            $table->unsignedBigInteger('id_hora')->nullable();
            $table->unsignedBigInteger('id_proyeccion')->nullable();
            $table->date('fi')->nullable();
            $table->date('ff')->nullable();

            // Agregar claves foráneas si las tablas existen
            $table->foreign('id_pelicula')->references('id_pelicula')->on('peliculas');
            $table->foreign('id_cine')->references('id_cine')->on('cines');
            $table->foreign('id_dia')->references('id_dia')->on('dias');
            $table->foreign('id_hora')->references('id_hora')->on('horas');
            $table->foreign('id_proyeccion')->references('id_proyeccion')->on('proyecciones');
        });
    }

    public function down() {
        Schema::table('asigna_cartelera', function (Blueprint $table) {
            $table->dropForeign(['id_pelicula', 'id_cine', 'id_dia', 'id_hora', 'id_proyeccion']);
            $table->dropColumn(['id_pelicula', 'id_cine', 'id_dia', 'id_hora', 'id_proyeccion', 'fi', 'ff']);
        });
    }
};