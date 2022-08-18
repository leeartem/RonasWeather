<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Weather\Openweather;
use App\Services\Geocode\GeoOpenweather;

class PublicAPI extends Controller
{
    public function getCurrentByCoordinates(Request $request) : array
    {
        $weather = (new Openweather());
        return $weather->setQuery($request->all())->current();
    }

    public function getCurrentByCity(Request $request) : array
    {
        $query = $request->all();
        $coordinates = (new GeoOpenweather($query))->getGeo();

        $weather = (new Openweather());
        return $weather->setQuery($query, $coordinates)->current();
    }
    
}
