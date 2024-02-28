<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fruitSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 20; $i++) { 
            DB::table('fruits')->insert(array(
                'name' => 'Cherry '.$i,
                'descr' => 'Fruit description '.$i,
                'price' => $i,
                'date' => date('Y-m-d')
            ));
        }
        
        $this->command->info("The fruits table has been seeded");
    }
}
