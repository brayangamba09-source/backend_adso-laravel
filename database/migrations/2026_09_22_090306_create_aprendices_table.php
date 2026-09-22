<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::connection('mysql')->hasTable('aprendices')) {
            Schema::connection('mysql')->create('aprendices', function (Blueprint $table) {
                $table->id();
                $table->string('nombre');
                $table->string('apellido');
                $table->string('email');
                $table->string('telefono');
                $table->string('direccion');
                $table->string('genero');
                $table->string('ficha');
                $table->string('jornada');
                $table->string('tipo_documento');
                $table->string('numero_documento');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::connection('mysql')->dropIfExists('aprendices');
    }
};