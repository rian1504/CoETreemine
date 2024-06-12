<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeFinishedCooper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeFinishedCooperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeFinishedCooper::factory(5)->create();
    }
}
