<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VelocidadProcesador extends Model
{
    protected $table = 'procesador_velocidad';
    protected $fillable = ['velocidad', 'estado'];
    public $timestamps = false;
}
