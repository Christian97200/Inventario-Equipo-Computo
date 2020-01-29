<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Becado extends Model
{
    protected $table = 'becados';
    protected $fillable = ['nombre', 'apellido'];
    protected $timestamps = false;
}
