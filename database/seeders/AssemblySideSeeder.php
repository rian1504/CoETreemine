<?php

namespace Database\Seeders;

use App\Models\Admin\AssemblySide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssemblySideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AssemblySide::factory(5)->create();
    }
}
