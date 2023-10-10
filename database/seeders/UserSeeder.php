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
        User::create([
            "name" => "Diego",
            "surname" => "Gamboa",
            "role" => "admin",
            "email" => "dgamboa@colegiojohnwall.cl",
            "password" => bcrypt("diego123456"),
        ]);
    }
}
