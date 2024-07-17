<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');   
        for ($i = 0; $i < 10; $i++) {
            Course::create([
                "title"=> $faker->sentence(3),
                "image"=> "assets/courseBanner/course/".rand(3,4).".jpeg",
                "speaker_id"=> rand(1, 10),
                "description"=> $faker->sentence(10),
            ]);
        }
    }
}
