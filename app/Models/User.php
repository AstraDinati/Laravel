<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Profile;
use App\Models\Position;
use App\Models\City;
use App\Models\Role;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;
    // public function profile()
    // {
    //     return $this->hasOne(Profile::class);
    // }
    // public function position()
    // {
    //     return $this->belongsTo(Position::class);
    // }
    // public function city()
    // {
    //     return $this->belongsTo(City::class);
    // }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }
}
