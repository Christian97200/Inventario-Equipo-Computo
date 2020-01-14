<?php

use Illuminate\Database\Seeder;
use App\Models\Ram;

class RamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ram = [
            'N/A',
            '128 MB',
            '250 MB',
            '512 MB',
            '1 GB',
            '2 GB',
            '3 GB',
            '4 GB',
            '6 GB',
            '8 GB',
            '16 GB'
        ];

        foreach($ram as $item){
            Ram::create([
                'capacidad' => $item
            ]);
        }
            
        
    }
}
