<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeFinishedCooper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeFinishedCooper>
 */
class PrototypeFinishedCooperFactory extends Factory
{
    protected $model = PrototypeFinishedCooper::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "finished_cooper_name" => fake()->word(),
            "finished_cooper_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}