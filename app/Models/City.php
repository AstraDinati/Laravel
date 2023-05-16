<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Country;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
