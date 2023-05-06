<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30; ++$i) {
            $date1 = date('Y-m-d', mt_rand(1262304000, 1672531200));
            $date2 = date('Y-m-d', mt_rand(1262304000, 1672531200));
            if ($date1 >= $date2) {
                DB::table('users')->insert([
                    'name' => Str::random(10),
                    'email' => Str::random(5) . '@' . Str::random(4) . '.com',
                    'age' => mt_rand(18, 80),
                    'salary' => mt_rand(1000, 5000),
                    'created_at' => $date2,
                    'updated_at' => $date1,
                    'cities_id' => mt_rand(1,3)
                ]);
            } else {
                DB::table('users')->insert([
                    'name' => Str::random(10),
                    'email' => Str::random(5) . '@' . Str::random(4) . '.com',
                    'age' => mt_rand(18, 80),
                    'salary' => mt_rand(1000, 5000),
                    'created_at' => $date1,
                    'updated_at' => $date2,
                    'cities_id' => mt_rand(1,3)
                ]);
            }
        }
    }
}
