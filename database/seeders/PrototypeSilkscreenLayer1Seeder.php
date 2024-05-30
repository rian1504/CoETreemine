<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeSilkscreenLayer1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeSilkscreenLayer1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeSilkscreenLayer1::factory(5)->create();
    }
}
