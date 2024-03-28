<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = "pelicula";
    protected $fillable = [
        'titulo',
        'descripcion',
        'img_first',
        'img_second',
        'img_third',
        'categoria',
        'calificacion',
        'url_first',
        'url_second',
        'url_third',
        'url_four'
    ];
    protected $hidden = ['created_at','updated_at'];
}
