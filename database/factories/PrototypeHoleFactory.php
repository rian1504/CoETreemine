<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeHole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeHole>
 */
class PrototypeHoleFactory extends Factory
{
    protected $model = PrototypeHole::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "hole_name" => fake()->word(),
            "hole_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}
