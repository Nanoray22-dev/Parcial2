<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'sexo',
        'fecha_nacimiento',
        'num_documento',
        'direccion',
        'telefono',
        'email',
    ];
}
