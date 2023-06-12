<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Pemrograman',
        ]);
        Category::factory()->create([
            'name' => 'Graph Design',
        ]);
        Category::factory()->create([
            'name' => 'Personal',
        ]);
        Category::factory()->create([
            'name' => 'Nature',
        ]);
        Category::factory()->create([
            'name' => 'Comedy',
        ]);
    }
}
