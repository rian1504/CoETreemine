<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeSurface;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeSurfaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeSurface::factory(5)->create();
    }
}
