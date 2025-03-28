<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\District;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RoleSeeder::class,
            DepartmentSeeder::class,
            DistrictSeeder::class,
            MunicipalitySeeder::class
        ]);

        Customer::factory(10)->create();
    }
}
