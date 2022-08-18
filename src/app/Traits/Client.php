<?php

namespace App\Traits;
use Illuminate\Support\Facades\Http;
use App\Exceptions\InvalidKey;
use Illuminate\Http\Request;

trait Client
{
    public function fetch()
    {
        $url = $this->url;
        $url .= "$this->method";
        $url .= http_build_query($this->query);
        $url .= "&appid=$this->api_key";

        $data = Http::get($url)->json();
        if (isset($data['cod'])&&$data['cod']==401)
            throw new InvalidKey;
        
        return $data;
    }

}