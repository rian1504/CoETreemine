<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeLayer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeLayer>
 */
class PrototypeLayerFactory extends Factory
{
    protected $model = PrototypeLayer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "layer_name" => fake()->word(),
            "layer_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}