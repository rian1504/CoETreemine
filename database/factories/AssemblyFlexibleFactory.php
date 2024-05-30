<?php

namespace Database\Factories;

use App\Models\Admin\AssemblyFlexible;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssemblyFlexible>
 */
class AssemblyFlexibleFactory extends Factory
{
    protected $model = AssemblyFlexible::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "flexible_name" => fake()->word(),
            "flexible_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}
