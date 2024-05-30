<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeSolder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeSolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeSolder::factory(5)->create();
    }
}
