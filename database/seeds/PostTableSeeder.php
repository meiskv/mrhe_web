<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Post::create([
            'name'          => 'Hello world',
            'slug'          => 'hello-world',
            'description'   => 'Lorem ipsum',
            'status'	=> 1,
            'type'		=> 'post',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);       
    }
}