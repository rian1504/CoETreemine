<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeSilk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeSilk>
 */
class PrototypeSilkFactory extends Factory
{
    protected $model = PrototypeSilk::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "silk_name" => fake()->word(),
            "silk_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}