<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->get();
        $example = DB::table('users')->where('id', '!=', 3)->get();
        $example1 = DB::table('users')->select('name', 'email')->get();
        $example2 = DB::table('users')->select('name', 'email as user_email')->get();
        $example3 = DB::table('users')->where('age', '>', '30')->orWhere('id', '<', '5')->get();
        $example4 = DB::table('users')->where('id', '=', 5)->orWhere(function($query){
            $query
            ->where('salary', '<', 1500)
            ->where('age', '>', 46);
        })
        ->get();
        $example5 = DB::table('users')->where('id', 3)->first();
        $email = DB::table('users')->where('id', 1)->value('email');
        $names = DB::table('users')->pluck('name');
        $whereBetween = DB::table('users')->whereBetween('age', [30, 40])->get();
        $whereNotBetween = DB::table('users')->whereNotBetween('age', [30, 40])->get();
        $whereIn = DB::table('users')->whereIn('id', [1,2,3,5])->get();
        $whereNotIn = DB::table('users')->whereNotIn('id', [1,2,3,5])->get();
        $where = DB::table('users')->whereNotNull('name')->get();
        $whereCreated_at = DB::table('users')->whereCreated_at('2018-09-27')->get();
        $whereIdOrCreated_at = DB::table('users')->whereIdOrCreated_at(1, '2018-09-27')->get();
        $orderBy = DB::table('users')->orderBy('age', 'desc')->get();
        $latest = DB::table('users')->where('age', '<', 40)->latest('updated_at')->get();
        $inRandomOrder = DB::table('users')->where('age', '<', 40)->get();
        $take = DB::table('users')->where('age', '>', 30)->take(5)->get();
        $skip = DB::table('users')->where('age', '>', 30)->skip(2)->take(10)->get();
        $update = DB::table('users')->where('age', 30)->update([
            'salary' => 500
        ]);
        $increment = DB::table('users')->where('id', 4)->increment('age', 2);
        // $delete = DB::table('users')->delete();
        $leftJoin = DB::table('users')->leftJoin('cities', 'cities.id', '=', 'users.cities_id')->get();

        return view('users.show', ['title' => 'users title',
        'users' => $users, 'example' => $example, 'example1' => $example1,
        'example2' => $example2, 'example3' => $example3, 'example4' => $example4,
        'example5' => $example5, 'email' => $email, 'names' => $names, 'whereBetween' => $whereBetween,
        'whereNotBetween' => $whereNotBetween, 'whereIn' => $whereIn, 'whereNotIn' => $whereNotIn,
        'where' => $where, 'whereCreated_at' => $whereCreated_at, 
        'whereIdOrCreated_at' => $whereIdOrCreated_at, 'orderBy' => $orderBy, 'latest' => $latest,
        'inRandomOrder' => $inRandomOrder, 'take' => $take, 'skip' => $skip, 'update' => $update,
        'increment' => $increment, 'leftJoin' => $leftJoin
        ]);
    }
}