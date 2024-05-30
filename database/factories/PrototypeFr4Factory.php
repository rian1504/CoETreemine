<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeFr4;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeFr4>
 */
class PrototypeFr4Factory extends Factory
{
    protected $model = PrototypeFr4::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "fr4_name" => fake()->word(),
        ];
    }
}
