<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeLayer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeLayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeLayer::factory(5)->create();
    }
}
