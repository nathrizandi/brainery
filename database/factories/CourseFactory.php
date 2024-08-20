<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');

        $titles = [
            'Introduction to Web Development',
            'Mastering Data Science with Python',
            'UX/UI Design Fundamentals',
            'Advanced Java Programming Techniques',
            'Digital Marketing Strategies for 2024',
            'Cloud Computing with AWS',
            'Building Mobile Apps with React Native',
            'Blockchain Technology: A Practical Approach',
            'Cybersecurity Essentials',
            'Artificial Intelligence and Its Applications'
        ];

        $descriptions = [
            'Learn the basics of web development, covering HTML, CSS, and JavaScript to create responsive websites.',
            'Dive into the world of data science with Python, exploring libraries like Pandas, NumPy, and Matplotlib.',
            'Understand the key principles of user experience and interface design to create intuitive digital products.',
            'This course covers advanced Java programming techniques, focusing on performance and scalability in enterprise applications.',
            'Discover the latest strategies in digital marketing, from social media campaigns to SEO, to drive growth in 2024.',
            'Learn how to leverage cloud computing platforms, with a focus on AWS, to build and deploy scalable applications.',
            'Build cross-platform mobile apps using React Native, covering the full development process from design to deployment.',
            'Explore blockchain technology in-depth, including smart contracts, decentralized applications, and real-world use cases.',
            'Gain a comprehensive understanding of cybersecurity, from risk management to protection strategies against cyber threats.',
            'This course delves into the fundamentals of artificial intelligence and explores its various applications across industries.'
        ];

        return [
            "title" => $titles[array_rand($titles)],
            "image" => "assets/courseBanner/course" . rand(3,7) . ".jpeg",
            "category_id" => rand(1,4),
            "speaker_id" => rand(1, 10),
            "description" => $descriptions[array_rand($descriptions)],
            "rating" => $faker->randomFloat(1, 3.0, 5.0),
        ];
    }
}
