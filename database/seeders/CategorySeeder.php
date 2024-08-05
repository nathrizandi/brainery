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
            "category" => "Music",
        ]);
        Category::factory()->create([
            "category" => "English",
        ]);
        Category::factory()->create([
            "category" => "Accounting",
        ]); 
    }
}
