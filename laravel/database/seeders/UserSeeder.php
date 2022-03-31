<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'surname' => 'John',
            'name' => 'Doe',
            'email' => 'john.doe@gmx.ch',
            'password' => password_hash('12345', PASSWORD_DEFAULT),
            'adress' => 'Seestrasse',
            'house_number' => 5,
            'town_id' => 1,
        ]);
    }
}
