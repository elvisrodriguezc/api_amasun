<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Location;
use \App\Models\Boat;
use \App\Models\Service;
use \App\Models\Departure;
use \App\Models\Document;
use \App\Models\Departamento;
use \App\Models\Provincia;
use \App\Models\Distrito;
use \App\Models\Customer;
use \App\Models\Booking;
use \App\Models\Discount;

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
        User::factory(10)->create();
        Location::factory(10)->create();
        Boat::factory(10)->create();
        Service::factory(10)->create();
        Departure::factory(10)->create();
        Document::factory(10)->create();
        Departamento::factory(24)->create();
        Provincia::factory(100)->create();
        Distrito::factory(150)->create();
        Customer::factory(10)->create();
        Booking::factory(10)->create();
        Discount::factory(50)->create();
    }
}
