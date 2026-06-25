<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ServiceDataSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // core seeds
        $this->call([
            ServiceDataSeeder::class,
        ]);

        // Optionally create additional users using factories
        // User::factory(10)->create();
    }
}
