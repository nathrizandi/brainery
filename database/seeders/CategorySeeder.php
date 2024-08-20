<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::factory()->create([
            "category" => "Computer Science",
        ]);
        Category::factory()->create([
            "category" => "Web Programming",
        ]);
        Category::factory()->create([
            "category" => "Infrastructure",
        ]);
        Category::factory()->create([
            "category" => "Data Science",
        ]); 
    }
}
