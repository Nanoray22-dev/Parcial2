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
        Schema::create('articulo', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->unsignedBigInteger('idcategoria');
            $table->unsignedBigInteger('idpresentacion');
            $table->timestamps();

            // $table->foreign('idcategoria')->references('idcategoria')->on('categoria');
            // $table->foreign('idpresentacion')->references('idpresentacion')->on('presentacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulo');
    }
};
