<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; ++$i) {
            $date1 = date('Y-m-d', mt_rand(1262304000, 1672531200));
            $date2 = date('Y-m-d', mt_rand(1262304000, 1672531200));
            if ($date1 >= $date2) {
                DB::table('posts')->insert([
                    'title' => Str::random(20),
                    'slug' => Str::random(15),
                    'likes' => mt_rand(0, 99999),
                    'created_at' => $date2,
                    'updated_at' => $date1,
                ]);
            } else {
                DB::table('posts')->insert([
                    'title' => Str::random(20),
                    'slug' => Str::random(15),
                    'likes' => mt_rand(0, 99999),
                    'created_at' => $date1,
                    'updated_at' => $date2,
                ]);
            }
        }
    }
}
