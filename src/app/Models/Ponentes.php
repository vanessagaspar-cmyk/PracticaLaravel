<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ponentes extends Model
{
    protected $table = 'ponentes';

    protected $fillable = [
        'nombre',
        'biografia',
        'especialidad',
    ];
}
