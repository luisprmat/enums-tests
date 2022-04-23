<?php

namespace Database\Factories;

use App\Enums\PostStatus;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        $title = $this->faker->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'status' => $this->faker->randomElement([
                PostStatus::DRAFT,
                PostStatus::PUBLISH,
                PostStatus::FUTURE,
            ]),
        ];
    }
}
