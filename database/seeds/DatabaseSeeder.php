<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'procesador',
            'marca',
            'ram',
            'hd'
        ]);

        $this->call(ProcesadoresSeeder::class);
        $this->call(MarcasSeeder::class);
        $this->call(RamSeeder::class);
        $this->call(HdSeeder::class);



    }

    protected function truncateTables(array $tables){
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
