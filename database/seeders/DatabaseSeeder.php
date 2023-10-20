<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Post;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create ([
            'name' => 'Agus Suswanto',
            'username' => 'agus',
            'email'=> 'aguss@gmail.com',
            'password'=> bcrypt('password'),
        ]);

        User::factory(5)->create();

        Post::factory(20)->create();

     $this->call ([
        /* PostsSeeder::class,
        UserSeeder::class, */
        CategorySeeder::class
     ]);
    }
}
