<?php

namespace Database\Seeders;

use App\Models\Admin\PrototypeTrack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Event\Tracer\Tracer;

class PrototypeTrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrototypeTrack::factory(5)->create();
    }
}
