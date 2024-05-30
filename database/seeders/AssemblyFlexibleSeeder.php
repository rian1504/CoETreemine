<?php

namespace Database\Seeders;

use App\Models\Admin\AssemblyFlexible;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssemblyFlexibleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AssemblyFlexible::factory(5)->create();
    }
}
