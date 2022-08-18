<?php

namespace App\Services\Geocode;

use App\Traits\Client;
use App\Exceptions\CityNotFound;

class GeoOpenweather extends Geocode
{
    use Client;

    public function __construct(array $query)
    {
        parent::__construct($query);
        $this->url = "http://api.openweathermap.org/geo/1.0/";
        $this->api_key = config('api.openweather.api_key');
    }

    public function getGeo()
    {
        $this->method = 'direct?';
        $result = $this->fetch();
        if (!count($result)) throw new CityNotFound();

        return $result[0];        
    }

    // Этот метод не нужен тут, но с его помощью можно
    // получить город по его координатам
    // public function getCity()
    // {
    //     $this->method = 'reverse?';
    //     $result = $this->fetch();
    //     if (!count($result)) throw new CityNotFound();

    //     return $result[0];      
    // }
}