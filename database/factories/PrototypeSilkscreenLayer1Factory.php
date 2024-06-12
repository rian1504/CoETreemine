<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeSilkscreenLayer1;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeSilkscreenLayer1>
 */
class PrototypeSilkscreenLayer1Factory extends Factory
{
    protected $model = PrototypeSilkscreenLayer1::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "silkscreen_layer1_name" => fake()->word(),
        ];
    }
}
