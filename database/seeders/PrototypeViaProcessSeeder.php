<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeViaProcess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrototypeViaProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeViaProcess::factory(5)->create();
    }
}
