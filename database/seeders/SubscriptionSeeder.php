<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        Subscription::create([
            "price"=> 19.99,
            "duration"=> 1,
        ]);

        Subscription::create([
            'price'=> 50.97,
            'duration' => 3,

        ]);

        Subscription::create([
            'price'=> 89.94,
            'duration' => 6,

        ]);

        Subscription::create([
            'price'=> 131.88,
            'duration' => 12,
        ]);
    }
}