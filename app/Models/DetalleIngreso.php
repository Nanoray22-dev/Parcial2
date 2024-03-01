<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    use HasFactory;

    protected $fillable = [
        'idingreso',
        'idarticulo',
        'precio_compra',
        'precio_venta',
        'stock_inicial',
        'stock_actual',
        'fecha_produccion',
        'fecha_vencimiento',
    ];

}
