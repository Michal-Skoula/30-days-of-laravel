<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Tag;
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
            'title'     => fake()->sentence(8),
			'excerpt'   => fake()->sentences(2, true),
			'content' 	=> fake()->sentences(16, true),
			'author_id' => Author::factory(),
        ];
    }
}

// ---- Populate the model ----
//
// App\Models\Blog::factory(10)->has(App\Models\Tag::factory()->count(5))->create()
