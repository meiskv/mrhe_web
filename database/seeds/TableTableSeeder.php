<?php

use Illuminate\Database\Seeder;

class Table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\tableone::create([
            'land_number_id'          => '1',
            'property_no'          => '123123',
            'land_area'          => '21323',
            'property_area'          => '3213213',
            'no_of_bedroom'          => '3123123',
            'no_of_bathroom'          => '21312312',
            'total_built_area'          => '213213213',
        ]);
        $this->command->info('User table seeded!');
    }
}
