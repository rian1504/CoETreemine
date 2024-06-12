<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeBoardType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeBoardType>
 */
class PrototypeBoardTypeFactory extends Factory
{
    protected $model = PrototypeBoardType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "board_type_name" => fake()->word(),
            "board_type_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}
