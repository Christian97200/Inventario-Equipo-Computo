<?php

use Illuminate\Database\Seeder;
use App\Models\HardDrive;
class HdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hd = [
            'N/A',
            '80 GB',
            '100 GB',
            '120 GB',
            '150 GB',
            '160 GB',
            '180 GB',
            '250 GB',
            '500 GB',
            '600 GB',
            '1 TB',
            '2 TB',
            '3 TB',
        ];

        foreach($hd as $item){
            HardDrive::create([
                'capacidad' => $item
            ]);
        }
    }
}
