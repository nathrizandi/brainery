<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Payment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            SpeakerSeeder::class,
            CategorySeeder::class,
            SubscriptionSeeder::class,
            // CourseMaterialDetailSeeder::class,
            CourseMaterialSeeder::class,
            // CourseSeeder::class,
            MethodSeeder::class,
            PublisherSeeder::class,
            BootcampSeeder::class,
            ownCourseSeeder::class,
            ownBootcampSeeder::class,
            PaymentSeeder::class
        ]);

    }
}