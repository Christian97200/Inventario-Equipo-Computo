<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $table = 'laptop';
    protected $fillable =   [
                                'No',
                                'fk_marca',
                                'modelo_laptop',
                                'fk_procesador',
                                'modelo_procesador',
                                'velocidad_procesador',
                                'fk_ram',
                                'fk_hd',
                                'ranking',
                                'notas',
                                'estado'
                            ];
    public $timestamps = false;
}
