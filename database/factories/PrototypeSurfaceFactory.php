<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeSurface;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeSurface>
 */
class PrototypeSurfaceFactory extends Factory
{
    protected $model = PrototypeSurface::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "surface_name" => fake()->word(),
            "surface_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}