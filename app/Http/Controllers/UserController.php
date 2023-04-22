<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function test1($name, $surname)
    {
        return view('user.test', ['name' => $name, 'surname' => $surname, 'title' => 'page 1 title']);
    }
    public function test2($name, $surname)
    {
        return view('user.test', ['name' => $name, 'surname' => $surname, 'title' => 'page 2 title']);
    }
    public function test($name, $surname)
    {
        return view('user.test', ['name' => $name, 'surname' => $surname, 'title' => 'page title']);
    }
    public function show($name, $age, $salary)
    {
        $arrMonth = [];
        for($i = 1; $i <= 30; ++$i){
            $arrMonth[] = $i;
        }
        return view('user.show', ['color' => 'color: red',
         'data' => ['name' => $name, 'age' => $age, 'salary' => $salary], 
         'title' => 'user show title', 'location' => ['country' => 'Georgia',
         'city' => 'Tbilisi'], 'year' => 1996, 'month' => 11, 'day' => 13,
         'str' => '<b>text</b>', 'age' => 18, 'age1' => 17, 'arr' => [1,2,3],
         'arr1' => ['eee', 'aaa', 'ccc'], 'arr3' => [1,2,3,4,5,6],
         'data1' => ['eee', 1, 'aaa', 2], 'arr4' => [[1,2,3],[4,5,6],[7,8,9]],
         'href' => "http://127.0.0.1:8000/post/5", 'text' => 'link text',
         'employees' => [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
        ], 'users' => ['user1', 'user2', 'user3'], 'numbers' => [1,2,3,4,0,6,7,8],
        'links' => [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ],
        'employees1' => [
            [
                'name' => 'name',
                'surname' => 'surname',
                'salary' => 'salary',
            ],
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ],
        'users9' => [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ],
        'arr10' => ['Vadim', 'Lebedev', 26, 2000], 'arrMonth' => $arrMonth, 'today' => 22
        ]);
    }
} 
