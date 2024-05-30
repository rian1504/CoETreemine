<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeBoardType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeBoardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeBoardType::factory(5)->create();
    }
}
