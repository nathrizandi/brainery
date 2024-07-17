<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Publisher;
use App\Models\Speaker;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i < 4; $i++) {
            Publisher::create([
                "nama"=> $faker->company(),
                "image"=>"assets/publishers/pub".$i.".png",
            ]);
        }
    }
}
