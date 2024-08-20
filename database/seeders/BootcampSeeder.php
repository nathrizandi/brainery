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
        
        $titles = [
            'Mastering Nature Photography',
            'Advanced Coding Techniques for Web Developers',
            'The Science of Sports Performance',
            'Building Sustainable Apps',
            'Training for Marathon Runners',
            'Exploring Machine Learning in Nature Conservation',
            'Game Development with Unity: From Basics to Pro',
            'Strength and Conditioning for Athletes',
            'Intro to Sustainable Living Practices',
            'Full-Stack Development Bootcamp: From Zero to Hero'
        ];

        $descriptions = [
            'Join this bootcamp to learn how to capture the beauty of nature with your camera and enhance your photography skills.',
            'This bootcamp covers advanced coding techniques for building robust, scalable web applications using modern technologies.',
            'A comprehensive workshop on understanding the science behind improving sports performance through training and nutrition.',
            'Explore how to design and build eco-friendly applications that minimize environmental impact and maximize efficiency.',
            'Prepare yourself for a marathon with expert training tips, endurance exercises, and mental preparation strategies.',
            'Learn how machine learning is being used to protect wildlife and manage natural resources in this innovative bootcamp.',
            'Master the art of game development with Unity and take your skills from beginner to professional in this immersive course.',
            'Train like an athlete with strength and conditioning techniques to enhance your physical performance in sports.',
            'Discover the principles of sustainable living and how to apply them in your daily life for a greener future.',
            'From front-end to back-end, this bootcamp will equip you with the skills needed to become a full-stack developer.'
        ];

        for ($i = 0; $i < 10; $i++) {
            Bootcamp::create([
                'title' => $titles[array_rand($titles)],
                'speaker_id' => rand(1,10),
                'image' => "assets/bootcamp/boot" . rand(1,5) . ".jpg",
                'date' => $faker->date(),
                'start_time' => '17:00:00',
                'duration' => rand(1,2),
                'publisher_id' => rand(1,3),
                'description' => $descriptions[array_rand($descriptions)]
            ]);
        }
    }
}
