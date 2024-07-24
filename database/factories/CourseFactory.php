<?php

namespace Database\Factories;

use Faker\Factory as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');
        return [
            //
            "title"=> $faker->sentence(3),
            "image"=> "assets/courseBanner/course".rand(3,7).".jpeg",
            "speaker_id"=> rand(1, 10),
            "description"=> $faker->sentence(10),
            "rating"=>  $faker->randomFloat(1, 3.0, 5.0),
        ];
    }
}
