<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagePath = 'https://i.ibb.co/1sspJdY/Akik-Hossain.jpg';

        User::create([
            'name' => 'Anmol',
            'role' => 'Admin',
            'email' => 'anmolmishraoins1@gmail.com',
            'password' => bcrypt('anmol123'),
            'image' => $imagePath,
        ]);
    }
}
