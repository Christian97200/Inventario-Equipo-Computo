<?php

use Illuminate\Database\Seeder;
use App\Models\VelocidadProcesador;

class VelocidadProcesadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $velocidad = [
            '1 GHz',
            '1.2 GHz',
            '1.3 GHz',
            '1.5 GHz',
            '1 GHz',
        ];

        foreach($velocidad as $item){
            VelocidadProcesador::create([
                'velocidad' => $item
            ]);
        }
    }
}
