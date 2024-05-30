<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeSilk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeSilkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeSilk::factory(5)->create();
    }
}
