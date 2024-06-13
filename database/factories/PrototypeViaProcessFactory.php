<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeViaProcess;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeViaProcess>
 */
class PrototypeViaProcessFactory extends Factory
{
    protected $model = PrototypeViaProcess::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "via_process_name" => fake()->word(),
            "via_process_price" => fake()->numberBetween(1, 10) * 1000
        ];
    }
}