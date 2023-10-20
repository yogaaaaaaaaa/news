<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User ;
        $user->name = 'Yoga';
        $user->email = 'yoaa@gmail.com';
        $user->password = bcrypt ('12345');
        $user->save();
    }
}
