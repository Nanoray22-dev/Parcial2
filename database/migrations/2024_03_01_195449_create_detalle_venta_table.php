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
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idventa');
            $table->unsignedBigInteger('ingreso_id');
            $table->integer('cantidad');
            $table->decimal('precio_venta', 10, 2);
            $table->decimal('descuento', 10, 2);
            $table->timestamps();

            $table->foreign('idventa')->references('id')->on('venta'); // Corregido de 'idventa' a 'id'
            // $table->foreign('ingreso_id')->references('id')->on('detalle_ingreso')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_venta');
    }
};
