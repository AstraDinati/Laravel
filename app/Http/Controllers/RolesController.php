<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RolesController extends Controller
{
    public function show()
    {
        $role = Role::find(1);

        return view('roles.show', ['title' => 'roles title', 'role' => $role,
        
        ]);
    }
}
