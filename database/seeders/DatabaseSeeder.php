<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            PlacesTableSeeder::class,
            AccommodationSeeder::class,
            ActivitesTableSeeder::class,
            CharactersTableSeeder::class,


        ]);
    }
}
