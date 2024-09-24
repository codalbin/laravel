<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake('en_US')->sentence(10), // It will generate a sentence of approximately 10 words (10 more or less) 
            'author' => fake('en_US')->name(),
            'slug' => Str::slug(fake('en_US')->sentence()), // The method slug allow to not make spaces (fait en sorte que tout soit collé car on ne veut pas faire d'espace ici entre les mots)
            'body' => fake('en_US')->text(),
            'date' => fake()->dateTimeBetween($startDate = '-1 years', $endDate = 'now') // Generate random date from 1 YA
        ];
    }
}
