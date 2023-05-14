<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::insert([
        'name' => "valentim prado",
        'email' => "valentim@gmail.com",
        'password' => Hash::make("Prado936"),
       ]);
       User::insert([
        'name' => "tiago mateus",
        'email' => "tiagomateus@gmail.com",
        'password' => Hash::make("Tiago936"),
       ]);
    }
}
