<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; ++$i){
            DB::table('profiles')->insert([
                'name' => Str::random(10),
                'surname' => Str::random(10),
                'email' => Str::random(5) . '@' . Str::random(3) . '.' . Str::random(3),
                'user_id' => $i
            ]);
        }
    }
}