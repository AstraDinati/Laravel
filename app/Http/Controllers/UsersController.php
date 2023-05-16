<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersController extends Controller
{
    public function show()
    {
        $user = User::with(['roles'])->find(1);

        return view('users.show', ['title' => 'users title', 'user' => $user
        
        ]);
    }
}
