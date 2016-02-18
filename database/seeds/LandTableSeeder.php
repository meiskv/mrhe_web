<?php

use Illuminate\Database\Seeder;

class LandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Models\Land::create([
            'land_number'          => '3214123'
        ]);
        App\Models\Land::create([
            'land_number'          => '3214223'
        ]);  
        App\Models\Land::create([
            'land_number'          => '3214123'
        ]);  
        App\Models\Land::create([
            'land_number'          => '3234123'
        ]);  
        App\Models\Land::create([
            'land_number'          => '3218123'
        ]);  
        App\Models\Land::create([
            'land_number'          => '3214923'
        ]);  
        App\Models\Land::create([
            'land_number'          => '3514123'
        ]);    

        $this->command->info('Land table seeded!');
    }
}
