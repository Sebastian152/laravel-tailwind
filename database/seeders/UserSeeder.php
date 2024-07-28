<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = "Salazar Slytherin";
        $user->email = "saslyther@hogwarts.com";
        $user->password = bcrypt("12345678");

        $user->save();

        $user = new User();

        $user->name = "Godric Gryffindor";
        $user->email = "gogryff@hogwarts.com";
        $user->password = bcrypt("12345678");

        $user->save();
    }
}
