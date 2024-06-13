<?php

namespace Database\Factories;

use App\Models\Admin\PrototypeRouteProcess;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrototypeRouteProcess>
 */
class PrototypeRouteProcessFactory extends Factory
{
    protected $model = PrototypeRouteProcess::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "route_process_name" => fake()->word()
        ];
    }
}
