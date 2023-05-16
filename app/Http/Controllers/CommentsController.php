<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function show()
    {
        // $comments = Comment::with(['post', 'customer'])->get();

        // 	foreach ($comments as $comment) {
        // 		dump($comment);
        // 		dump($comment->post);
        // 		dump($comment->customer);
        // 	}

        $comments = Comment::all();

        foreach ($comments as $comment) {
            // dump($comment->post);
            dump($comment->customer); 
        }

        return view('comments.show', [
            'title' => 'comments title', 'comments' => $comments

        ]);
    }
}
