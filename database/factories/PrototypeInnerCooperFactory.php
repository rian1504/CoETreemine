<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeInnerCooper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeInnerCooper>
 */
class PrototypeInnerCooperFactory extends Factory
{
    protected $model = PrototypeInnerCooper::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "inner_cooper_name" => fake()->word(),
            "inner_cooper_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}