<?php

namespace Database\Seeders;

use App\Models\Admin\AssemblyBoardType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssemblyBoardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AssemblyBoardType::factory(5)->create();
    }
}
