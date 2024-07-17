<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Speaker;
use Faker\Factory as Faker;

class SpeakerSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            Speaker::create([
                "nama"=> $faker->name,
                "image"=>"assets/speaker".rand(1,5).".jpg",
            ]);
        } for ($i = 0; $i < 10; $i++) {
            Speaker::create([
                "nama"=> $faker->name,
                "image"=>"assets/speaker".rand(1,5).".jpg",
            ]);
        }
    }
}