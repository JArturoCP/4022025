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
        if (!schema::hasTable('proyecciones')) {
            Schema::create('proyecciones', function (Blueprint $table) {
                $table->id('id_proyeccion');
                $table->string('des_proy');
                $table->string('precio');
                $table->softDeletes();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecciones');
    }
};
