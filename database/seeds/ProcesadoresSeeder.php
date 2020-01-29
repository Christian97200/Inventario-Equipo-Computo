<?php

use Illuminate\Database\Seeder;
use App\Models\Procesador;

class ProcesadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Procesador::create([
            'procesador' => 'N/A',
        ]);

        Procesador::create([
            'procesador' => 'Intel',
        ]);

        Procesador::create([
            'procesador' => 'AMD',
        ]);
    }
}
