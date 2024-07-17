<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Course;
use App\Models\CourseMaterial;

class CourseMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $courses = Course::all();
        $weeks = ["Week 1", "Week 2", "Week 3", "Week 4"];
        foreach ($courses as $course) {
            foreach ($weeks as $week) {
                CourseMaterial::create([
                    "course_id"=>$course->id,
                    "title"=>$week,
                ]);                
            }
            
        }
    }
}
