<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\User::create([
            'firstname'          => 'Fareed',
            'lastname'          => 'Micropolis',
            'email'         => 'admin@micropolis.com',
            'password'      => Hash::make('12345')
        ]);
        App\Models\User::create([
            'firstname'          => 'Mikhail',
            'lastname'          => 'Villamor',
            'email'         => 'mikhail.villamor@micropolis.com',
            'password'      => Hash::make('1234567890')
        ]);    

        $this->command->info('User table seeded!');
    }
}
