<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;

    protected $fillable = [
        'idtrabajador',
        'idcliente',
        'fecha',
        'tipo_comprobante',
        'serie',
        'correlativo',
        'igv',
        'estado',
    ];
}