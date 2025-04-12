<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(!Schema::hasTable('horas')) {
            Schema::create('horas', function (Blueprint $table) {
                $table->id('id_horas'); // Columna de ID
                $table->string('descripcion_h', 200); // Columna Nombre
                $table->softDeletes(); // Elimina suavemente
                $table->timestamps(); // Tiempos de creación y actualización
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('horas', function (Blueprint $table) {
            //
        });
    }
};
