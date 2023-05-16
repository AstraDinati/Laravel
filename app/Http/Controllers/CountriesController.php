<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Country;

class CountriesController extends Controller
{
    public function show()
    {
        // $country = Country::find(1);
        $countries = Country::all();
        $country1 = Country::find(1)->cities()->where('population', '>', 5000000)->orderBy('population')->get();
        $country2 = Country::find(2)->cities()->where('population', '>', 5000000)->orderBy('population')->get();
        $country3 = Country::find(3)->cities()->where('population', '>', 5000000)->orderBy('population')->get();

        return view('countries.show', ['title' => 'countries title','countries' => $countries, 'country1' => $country1, 
        'country2' => $country2, 'country3' => $country3, 
        ]);
    }
}
