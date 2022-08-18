<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\Geocode\GeoOpenweather;

class getGeoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $query = [
            'q' => 'Лондон',
            'lang' => 'ru',
            'units' => 'metrics',
        ];
        $geo = (new GeoOpenweather($query))->getGeo();
        // dd($coordinates);
        $this->assertTrue($geo["name"] == "London");
    }
}
