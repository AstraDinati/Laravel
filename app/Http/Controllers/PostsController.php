<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;

class PostsController extends Controller
{
    // public function form(Request $request, $id, $login)
    // {
    //     $del = DB::table('posts');
    //     if ($request->has('name') and $request->has('surname') and $request->has('salary')) {
    //         // $data = $request->only('name', 'surname', 'salary'); // только 'name', 'surname', 'salary'
    //         // $data = $request->exept('name', 'surname', 'salary'); // все кроме 'name', 'surname', 'salary'

    //         $data = $request->all(); //все 
    //         $keys = $request->keys();


    //         return view('posts.form', [
    //             'title' => 'result title', 'data' => $data, 'keys' => $keys, 'id' => $id, 'login' => $login,
    //             'paginate' => Posts::paginate(15),
    //         ]);
    //     }
    //     return view('posts.form', [
    //         'title' => 'form title', 'id' => $id, 'login' => $login, 'paginate' => Posts::paginate(15), 'del' => $del
    //     ]);
    // }

    // public function method(Request $request)
    // {
    //     echo 'path:';
    //     dump($request->path());

    //     echo 'url:';
    //     dump($request->url());

    //     echo 'fullUrl:';
    //     dump($request->fullUrl());
    // }
    public function add(Request $request)
    {
        if ($request->has('text')) {
            DB::table('posts')->insert([
                'text' => $request->input('text'),
            ]);
        }
        return view('posts.add', ['title' => 'add post']);
    }
    public function delete(Request $request, $id)
    {
        DB::table('posts')->where('id', $id)->delete();

        $page = $request->input('page', 1);

        return redirect()->route('form', ['page' => $page]);
    }
    public function form()
    {
        return view('posts.form', [
            'title' => 'form title', 'paginate' => Posts::paginate(15),
        ]);
    }
    public function update(Request $request, $id)
    {
        $page = $request->input('page', 1);
        $post = Posts::whereId($id)->get('text');
        if ($request->has('text')) {
            DB::table('posts')->where('id', $id)->update([
                'text' => $request->input('text'),
            ]);

            return redirect()->route('form', ['page' => $page]);
        }

        return view('posts.update', [
            'title' => 'update title', 'post' => $post
        ]);
    }
}
