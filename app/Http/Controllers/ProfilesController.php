<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;

class ProfilesController extends Controller
{
    public function show()
    {
        $profile = Profile::find(1);

        return view('profiles.show', ['title' => 'profiles title', 'profile' => $profile,
        
        ]);
    }
}
