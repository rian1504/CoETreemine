<?php

namespace Database\Factories;

use App\Models\Admin\AssemblySide;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssemblySide>
 */
class AssemblySideFactory extends Factory
{
    protected $model = AssemblySide::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "side_name" => fake()->word(),
            "side_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}
