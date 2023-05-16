<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\City;

class CitiesController extends Controller
{
    public function show()
    {
        // $city = City::find(1);
        $cities = City::all()->where('population','>',9000000);

        return view('cities.show', ['title' => 'cities title', 'cities' => $cities
        ]);
    }
}
