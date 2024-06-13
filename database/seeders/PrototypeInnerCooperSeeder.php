<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeInnerCooper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeInnerCooperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeInnerCooper::factory(5)->create();
    }
}
