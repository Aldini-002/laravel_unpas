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
            'name' => 'Backend Developer',
        ]);
        Category::factory()->create([
            'name' => 'Frontend Developer',
        ]);
        Category::factory()->create([
            'name' => 'UI/UX Design',
        ]);
    }
}
