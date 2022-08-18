<?php

namespace App\Services\Geocode;

abstract class Geocode
{
    /**
    *    Base uri of the API : http://api.openweathermap.org/geo/1.0/
    */
    protected $url;

    /**
    *    API Key
    */
    protected $api_key;

    protected $query;

    protected $method;

    public function __construct(array $query)
    {
        $this->query = $query;
    }

    abstract public function getGeo();
    
    // abstract public function getCity();
}