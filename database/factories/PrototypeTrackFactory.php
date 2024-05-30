<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeTrack;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeTrack>
 */
class PrototypeTrackFactory extends Factory
{
    protected $model = PrototypeTrack::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "track_name" => fake()->word(),
            "track_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}