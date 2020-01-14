<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procesador extends Model
{
    protected $table = 'procesador';
    protected $fillable = ['procesador', 'estado'];
    public $timestamps = false;
}
