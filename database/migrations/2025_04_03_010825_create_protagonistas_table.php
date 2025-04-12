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
        // Crea la tabla solo si no existe
        if (!Schema::hasTable('protagonistas')) {
            Schema::create('protagonistas', function (Blueprint $table) {
                $table->id('id_protagonista');  // Si deseas un nombre personalizado para el ID
                $table->integer('id_personas');  // Uso de integer() en lugar de int()
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protagonistas');
    }

};
