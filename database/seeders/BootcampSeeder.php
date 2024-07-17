<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Bootcamp;
use App\Models\Speaker;
use App\Models\Publisher;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $speakers = Speaker::all();
        $publishers = Publisher::all();
        for ($i = 0; $i < 10; $i++) {
            Bootcamp::create([
                'title'=> $faker->sentence(4),
                'speaker_id'=>rand(1,10),
                'image'=>"assets/bootcamp/boot".rand(1,5).".jpg",
                'date'=>$faker->date(),
                'start_time'=>'17:00:00',
                'duration'=>rand(1,2),
                'publisher_id'=>rand(1,3),
                'description'=>$faker->paragraph()
            ]);
        }
    }
}
