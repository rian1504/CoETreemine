<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeSolder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeSolder>
 */
class PrototypeSolderFactory extends Factory
{
    protected $model = PrototypeSolder::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "solder_name" => fake()->word(),
            "solder_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}
