<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeHole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeHoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeHole::factory(5)->create();
    }
}
