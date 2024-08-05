<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Speaker;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Speaker::factory()->create([
            "nama" => "Joeliardo Gerald Leviothinel",
            "image"=>"assets/speaker".rand(1,5).".jpg",
        ]);
        Speaker::factory()->create([
            "nama" => "Dexter Valerian Krisnadhi",
            "image"=>"assets/speaker".rand(1,5).".jpg",
        ]);
        Speaker::factory(8)->create();
    }
}
