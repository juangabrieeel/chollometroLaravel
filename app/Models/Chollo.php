<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chollo extends Model
{
    protected $table = 'chollos';

    protected $fillable = [
        'titulo',
        'descripcion',
        'url',
        'categoria',
        'puntuacion',
        'precio',
        'precio_descuento',
        'disponible'
    ];
}
