<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeFr4;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeFr4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeFr4::factory(5)->create();
    }
}
