<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; ++$i){
            DB::table('user_role')->insert([
                'user_id' => mt_rand(1, 20),
                'role_id' => mt_rand(1, 6),
            ]);
        }
    }
}
