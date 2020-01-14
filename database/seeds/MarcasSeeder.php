<?php

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create([
            'marca' => 'N/A'
        ]);

        Marca::create([
            'marca' => 'HP'
        ]);
    
        Marca::create([
            'marca' => 'DELL',
        ]);
    
        Marca::create([
            'marca' => 'THOSHIBA',
        ]);

        Marca::create([
            'marca' => 'LENOVO',
        ]);

        Marca::create([
            'marca' => 'ASUS',
        ]);

        Marca::create([
            'marca' => 'ACER',
        ]);
    }
}
