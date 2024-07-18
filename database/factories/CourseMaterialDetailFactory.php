<?php

namespace Database\Factories;

use App\Models\CourseMaterial;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseMaterialDetail>
 */
class CourseMaterialDetailFactory extends Factory
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
            "courseMaterial_id"=> $faker->numberBetween(),
            "title"=> $faker->words(5, true),
            "video"=> $faker->randomDigitNotNull().'.mp4',
            "description"=> $faker->paragraphs(5, true),
        ];
    }
}
