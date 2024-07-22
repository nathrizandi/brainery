<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            User::create([
                "email"=> $faker->email,
                "username"=> $faker->name,
                "password"=> bcrypt('12345678'),
                'membership_type'=> 'free'
            ]);
        }
        User::create([
            'email' => 'abc@gmail.com',
            'username' => 'abraham',
            'password' => '123',
            'membership_type' => 'paid'
        ]);
    }
}
