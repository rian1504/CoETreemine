<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeSoldermaskLayer1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeSoldermaskLayer1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeSoldermaskLayer1::factory(5)->create();
    }
}
