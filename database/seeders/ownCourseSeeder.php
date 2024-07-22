<?php

namespace Database\Seeders;

use App\Models\OwnCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ownCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OwnCourse::create([
            'course_id' => 2,
            'user_id'=> 11
        ]);
        OwnCourse::create([
            'course_id' => 3,
            'user_id'=> 11
        ]);
        OwnCourse::create([
            'course_id' => 1,
            'user_id'=> 11
        ]);
    }
}