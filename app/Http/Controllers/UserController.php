<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show($name)
    {
        $users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',
        ];
        if(isset($users[$name])){
            return $users[$name];
        } else {
            return 'такого имени не существует';
        }
    }
}
