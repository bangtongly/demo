<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TimelineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'image' => Str::random(10),
            'video' => Str::random(10),
            'active' => 1,
            'like' => 100,
            'icon' => Str::random(10),
            'content' => Str::random(1000),
        ];
    }
}
