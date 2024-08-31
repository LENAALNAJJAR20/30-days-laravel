<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'image'=>'image61.jpg',
            'title'=>fake()->jobTitle(),
            'description'=>fake()->paragraph(),
            'auth'=>fake()->paragraph(),
            'price'=>'220'
        ];
    }
}
