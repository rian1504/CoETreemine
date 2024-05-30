<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeCooperLayer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeCooperLayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeCooperLayer::factory(5)->create();
    }
}
