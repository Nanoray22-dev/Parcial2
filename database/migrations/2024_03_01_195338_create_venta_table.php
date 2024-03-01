<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trabajador_id');
            $table->unsignedBigInteger('cliente_id');
            $table->date('fecha');
            $table->string('tipo_comprobante');
            $table->string('serie');
            $table->string('correlativo');
            $table->decimal('igv', 10, 2);
            $table->string('estado');
            $table->timestamps();

            // $table->foreign('trabajador_id')->references('id')->on('trabajador')->onDelete('cascade');;
            // $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta');
    }
}
