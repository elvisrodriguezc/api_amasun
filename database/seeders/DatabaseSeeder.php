<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Location::factory(10)->create();
        \App\Models\Boat::factory(10)->create();
        \App\Models\Service::factory(10)->create();
        \App\Models\Departure::factory(10)->create();
        \App\Models\Document::factory(10)->create();
        \App\Models\Departamento::factory(24)->create();
        \App\Models\Provincia::factory(100)->create();
        \App\Models\Distrito::factory(150)->create();
        \App\Models\Customer::factory(10)->create();
        \App\Models\Booking::factory(10)->create();
        \App\Models\Discount::factory(50)->create();
    }
}
