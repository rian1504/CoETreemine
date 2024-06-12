<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeCooperLayer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeCooperLayer>
 */
class PrototypeCooperLayerFactory extends Factory
{
    protected $model = PrototypeCooperLayer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "cooper_layer_name" => fake()->word(),
        ];
    }
}
