<?php

namespace Database\Factories;

use App\Models\Admin\AssemblyBoardType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssemblyBoardType>
 */
class AssemblyBoardTypeFactory extends Factory
{
    protected $model = AssemblyBoardType::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "board_type_name" => fake()->word()
        ];
    }
}
