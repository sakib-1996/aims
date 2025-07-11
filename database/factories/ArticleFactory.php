<?php

namespace Database\Factories;

use App\Models\Counsellor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence();

        return [
            'counsellor_id' => rand(1, Counsellor::count()),
            'title' => $title,
            'slug' => generateSlug($title),
            'image' => 'default.png',
            'short_description' => fake()->text(),
            'description' => fake()->realText(),
        ];
    }
}
