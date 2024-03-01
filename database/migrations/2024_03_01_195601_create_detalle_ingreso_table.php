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
        Schema::create('detalle_ingreso', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ingreso_id');
            $table->unsignedBigInteger('idarticulo');
            $table->decimal('precio_compra', 10, 2);
            $table->decimal('precio_venta', 10, 2);
            $table->integer('stock_inicial');
            $table->integer('stock_actual');
            $table->date('fecha_produccion');
            $table->date('fecha_vencimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ingreso');
    }
};
