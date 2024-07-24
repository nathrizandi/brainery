<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('en_US');
        for ($i = 0; $i < 5; $i++){
            Admin::create([
                "username" => $faker->firstName(),
                "password" => bcrypt('admin43R'),
                "email"=> $faker->email,
            ]);
        }
    }
}
