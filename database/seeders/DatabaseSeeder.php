<?php

namespace Database\Seeders;

use App\Models\store;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $store = store::factory()->create();
        $store->lockers()->createMany([
            ['locker_number' => '1', 'code' => 1234],
            ['locker_number' => '2', 'code' => 5678],
            ['locker_number' => '3', 'code' => 9101],
            ['locker_number' => '4', 'code' => 9101],
            ['locker_number' => '5', 'code' => 9101],
            ['locker_number' => '6', 'code' => 9101],
            ['locker_number' => '7', 'code' => 9101],
            ['locker_number' => '8', 'code' => 9101],
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '1234567890',
            'role' => 'admin',
        ]);

    }
}
