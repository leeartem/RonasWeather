<?php

namespace App\Services\Weather;

abstract class Weather
{
    
    /**
    *    Base uri of the API : https://api.openweathermap.org/data/2.5/
    */
    protected $url;

    /**
    *    API Key
    */
    protected $api_key;

    protected $query;

    protected $method;

    abstract public function current();

    abstract public function setQuery(array $query) : self;

}