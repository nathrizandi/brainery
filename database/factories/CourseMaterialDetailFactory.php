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

        $links = [
            'https://www.youtube.com/embed/T6RJUzuVq4w?si=6MaKOJR8DALgOQWb',
            'https://www.youtube.com/embed/rT6QV0dWJG4?si=lvxRZP14ZsZbWK3v',
            'https://www.youtube.com/embed/-AKudjxdbQw?si=vUxNis6yhlpui5sn',
            'https://www.youtube.com/embed/-uleG_Vecis?si=Qt6SsqXeepuKH_sb',
            'https://www.youtube.com/embed/erEgovG9WBs?si=sGcR316fT4XuJdEd'
        ];

        $randomLink = $links[array_rand($links)];;

        return [
            //
            "courseMaterial_id"=> $faker->numberBetween(),
            "title"=> $faker->words(5, true),
            "video"=> $randomLink,
            "description"=> $faker->paragraphs(20, true),
        ];
    }
}