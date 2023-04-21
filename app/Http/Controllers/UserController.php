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
        return view('user.show', ['name' => $name, 'age' => $age, 'salary' => $salary, 'title' => 'user show title']);
    }
}
