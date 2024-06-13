<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeSoldermaskLayer1;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeSoldermaskLayer1>
 */
class PrototypeSoldermaskLayer1Factory extends Factory
{
    protected $model = PrototypeSoldermaskLayer1::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "soldermask_layer1_name" => fake()->word(),
        ];
    }
}
