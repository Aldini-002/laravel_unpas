<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Aldini 002',
            'email' => '002aldini@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 'admin'
        ]);

        \App\Models\User::factory(3)->create();

        $this->call([
            CategorySeeder::class,
            BlogSeeder::class
        ]);
    }
}
