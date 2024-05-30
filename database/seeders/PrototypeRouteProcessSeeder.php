<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeRouteProcess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeRouteProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeRouteProcess::factory(5)->create();
    }
}
