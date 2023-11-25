<?php

namespace Database\Factories;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraphs(3, true),
            'salary' => $this->faker->numberBetween(5_000, 150_000),
            'location' => $this->faker->city,
            'category' => $this->faker->randomElement(Job::$category),
            'experience' => $this->faker->randomElement(Job::$experience),
        ];
    }
}