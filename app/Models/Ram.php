<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    protected $table = 'ram';
    protected $fillable = ['capacidad','estado'];
    public $timestamps = false;
}
