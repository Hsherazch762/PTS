<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Level>
 */
class LevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->word();

        return [
            'title'     => $title,
            'slug'      => str()->slug($title),
            'board_id'  => $this->faker->numberBetween(1, 100)
        ];
    }
}
