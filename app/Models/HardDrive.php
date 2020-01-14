<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HardDrive extends Model
{
    protected $table = 'hd';
    protected $fillable = ['capacidad','estado'];
    public $timestamps = false;
}
