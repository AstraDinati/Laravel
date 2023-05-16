<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; ++$i) {
            DB::table('comments')->insert([
                'text' => Str::random(200),
                'post_id' => mt_rand(1,10),
                'customer_id' => mt_rand(1,10),
            ]);
        }
    }
}
