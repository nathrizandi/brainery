<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as Faker;
use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\CourseMaterialDetail;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseMaterial>
 */
class CourseMaterialFactory extends Factory
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
            "course_id"=>Course::factory()->create(),
            "title"=>"Week 1",
        ];

    }

    public function configure()
    {
        return $this->afterCreating(function (CourseMaterial $courseMaterial){
            $weeks = ["Week 1", "Week 2", "Week 3", "Week 4"];

            foreach($weeks as $week){
                if ($week == "Week 1"){
                    CourseMaterialDetail::factory()->create([
                        "courseMaterial_id" => $courseMaterial->id,
                    ]);
                    continue;
                }

                CourseMaterial::create([
                    "course_id"=> $courseMaterial->course_id,
                    "title"=>$week,
                ]);
                CourseMaterialDetail::factory()->create([
                    "courseMaterial_id" => $courseMaterial->id,
                ]);
            }
        });
    }
}
