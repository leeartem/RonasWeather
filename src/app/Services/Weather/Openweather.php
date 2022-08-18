<?php

namespace App\Services\Weather;
use App\Traits\Client;
use \Illuminate\Http\Request;

class Openweather extends Weather
{
    use Client;

    public function __construct()
    {
        $this->url = "https://api.openweathermap.org/data/2.5/";
        $this->api_key = config('api.openweather.api_key');
    }

    public function current()
    {
        $this->method = 'weather?';
        $data = $this->fetch();
        
        return $data;
    }

    public function setQuery(array $query, $coordinates = []) : self
    {
        $query = [
            'lat' => $query['lat'] ?? $coordinates['lat'],
            'lon' => $query['lon'] ?? $coordinates['lon'],
            'units' => $query['units'] ?? config('api.openweather.units'),
            'lang' => $query['lang'] ?? config('api.openweather.lang'),
        ];
        $this->query = $query;

        return $this;
    }
}