<?php

namespace Database\Seeders;

use App\Models\Admin\AssemblyBoardType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => env('EMAIL'),
            'telp' => env('TELP'),
            'password' => Hash::make(env('PASSWORD')),
            'is_admin' => 1,
        ]);

        $this->call([
            AssemblyBoardTypeSeeder::class,
            AssemblyFlexibleSeeder::class,
            AssemblySideSeeder::class,

            PrototypeBoardTypeSeeder::class,
            PrototypeRouteProcessSeeder::class,
            PrototypeFr4Seeder::class,
            PrototypeLayerSeeder::class,
            PrototypeInnerCooperSeeder::class,
            PrototypeFinishedCooperSeeder::class,
            PrototypeCooperLayerSeeder::class,
            PrototypeTrackSeeder::class,
            PrototypeHoleSeeder::class,
            PrototypeSolderSeeder::class,
            PrototypeSilkSeeder::class,
            PrototypeSurfaceSeeder::class,
            PrototypeViaProcessSeeder::class,
            PrototypeSoldermaskLayer1Seeder::class,
            PrototypeSilkscreenLayer1Seeder::class,
        ]);
    }
}
