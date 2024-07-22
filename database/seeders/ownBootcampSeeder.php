<?php

namespace Database\Seeders;

use App\Models\OwnBootcamp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ownBootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OwnBootcamp::create([
            'bootcamp_id' => 2,
            'user_id'=> 11
        ]);
        OwnBootcamp::create([
            'bootcamp_id' => 3,
            'user_id'=> 11
        ]);
        OwnBootcamp::create([
            'bootcamp_id' => 1,
            'user_id'=> 11
        ]);
    }
}
