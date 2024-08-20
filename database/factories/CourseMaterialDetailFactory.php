<?php

namespace Database\Factories;

use App\Models\CourseMaterial;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseMaterialDetail>
 */
class CourseMaterialDetailFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');

        $links = [
            'https://www.youtube.com/embed/T6RJUzuVq4w?si=6MaKOJR8DALgOQWb',
            'https://www.youtube.com/embed/rT6QV0dWJG4?si=lvxRZP14ZsZbWK3v',
            'https://www.youtube.com/embed/-AKudjxdbQw?si=vUxNis6yhlpui5sn',
            'https://www.youtube.com/embed/-uleG_Vecis?si=Qt6SsqXeepuKH_sb',
            'https://www.youtube.com/embed/erEgovG9WBs?si=sGcR316fT4XuJdEd'
        ];

        $randomLink = $links[array_rand($links)];

        $titles = [
            'Introduction to Web Development with HTML and CSS',
            'Mastering JavaScript for Modern Web Applications',
            'Understanding the Fundamentals of Machine Learning',
            'Building RESTful APIs with Node.js and Express',
            'Data Structures and Algorithms in Python'
        ];

        $descriptions = [
            'In this material, you will learn the fundamentals of web development, starting with HTML and CSS to build static web pages.',
            'This session covers advanced JavaScript techniques, including ES6 features, and how to apply them in modern web apps.',
            'An introduction to machine learning, focusing on core algorithms and their applications in various industries.',
            'Learn how to build RESTful APIs using Node.js and Express, covering best practices and practical implementations.',
            'This material focuses on important data structures and algorithms, with examples in Python to improve problem-solving skills.'
        ];

        return [
            "courseMaterial_id" => $faker->numberBetween(),
            "title" => $titles[array_rand($titles)],
            "video" => $randomLink,
            "description" => $descriptions[array_rand($descriptions)],
        ];
    }
}
