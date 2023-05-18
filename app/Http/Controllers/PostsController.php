<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;

class PostsController extends Controller
{
    public function form()
    {
        // return response('not found', '404');
        // ->withHeaders([
        //     'Content-Type' => 'text/plain',
        //     'X-Header-One' => 'value',
        //     'X-Header-Two' => 'value',
        // ]);
        return response()->view('posts.form', [
            'title' => 'form title', 'paginate' => Posts::paginate(15),
        ])->header('Content-Type', 'text/plain');
    }
    public function add(Request $request)
    {
        if ($request->has('text')) {
            DB::table('posts')->insert([
                'text' => $request->input('text'),
            ]);
        }
        return view('posts.add', ['title' => 'add post']);
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
    public function delete(Request $request, $id)
    {
        DB::table('posts')->where('id', $id)->delete();

        $page = $request->input('page', 1);

        return redirect()->route('form', ['page' => $page]);
    }

    public function index(Request $request)
    {
        $request->session()->forget('timer');

        return redirect()->route('timer');
    }

    public function counter(Request $request)
    {
        $counter = $request->session()->get('counter', 0);
        $counter++;
        $request->session()->put('counter', $counter);

        return view('posts.counter', ['title' => 'counter title', 'counter' => $counter]);
    }

    public function timer(Request $request)
    {
        $timer = time() - $request->session()->get('timer', time());

        $request->session()->put('timer', time() - $timer);

        return view('posts.timer', ['title' => 'timer title', 'timer' => $timer]);
    }

    public function circ1(Request $request)
    {
        $request->session()->put('time', time());

        return redirect()->route('form');
    }

    public function circ2(Request $request)
    {
        $value = $request->session()->pull('time');

        dump($request->session()->get('time'));

        return view('posts.circ2', ['title' => 'circ2 title', 'value' => $value]);
    }

    public function circ3(Request $request)
    {
        dump($request->session());
        $request->session()->flush();
    }

    public function circ4(Request $request)
    {
        $request->session()->put('arr', ['a', 'b', 'c']);
        session(['arr' => ['e', 'f', 'g']]);
        $request->session()->push('arr', 'd');
        if(session()->exists('time')){
            dump(session());
        }
        dump(session());
    }
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
}
