<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Сustomer;

class Comment extends Model
{
    use HasFactory;
    protected $with = ['post', 'customer'];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function customer()
    {
        return $this->belongsTo(Сustomer::class);
    }
}
