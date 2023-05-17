<?php

namespace Database\Seeders;

use Database\Seeders\UsersSeeder;
use Database\Seeders\CommentsSeeder;
use Database\Seeders\CustomersSeeder;
use Database\Seeders\UserRoleSeeder;
use Database\Seeders\PostsSeeder;
use Database\Seeders\CitiesSeeder;
use Database\Seeders\ProfilesSeeder;
use Database\Seeders\CountriesSeeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
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
        $this->call([
            // UsersSeeder::class,
            // UserRoleSeeder::class,
            PostsSeeder::class,
            // CustomersSeeder::class,
            // CommentsSeeder::class,
            // ProfilesSeeder::class,
            // CitiesSeeder::class
        ]);
    }
}
