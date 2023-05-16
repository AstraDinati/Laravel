<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function form(Request $request, $id, $login)
    {
        if ($request->has('name') and $request->has('surname') and $request->has('salary')) {
            // $data = $request->only('name', 'surname', 'salary'); // только 'name', 'surname', 'salary'
            // $data = $request->exept('name', 'surname', 'salary'); // все кроме 'name', 'surname', 'salary'

            $data = $request->all(); //все 
            $keys = $request->keys();

            return view('posts.form', ['title' => 'result title', 'data' => $data, 'keys' => $keys, 'id' => $id, 'login' => $login]);
        }
        return view('posts.form', ['title' => 'form title', 'id' => $id, 'login' => $login]);
    }

    public function method(Request $request)
    {
        echo 'path:';
        dump($request->path());

        echo 'url:';
        dump($request->url());

        echo 'fullUrl:';
        dump($request->fullUrl());
    }
}
