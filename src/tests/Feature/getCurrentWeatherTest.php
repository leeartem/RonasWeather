<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\Weather\Openweather;

class getCurrentWeatherTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $query = [
            'lat' => '51.5073',
            'lon' => '-0.1276',
            // 'lang' => 'ru',
            // 'units' => 'metrics',
        ];
        $weather = (new Openweather());
        $result = $weather->setQuery($query)->current();
        $this->assertTrue($result["cod"] === 200);
    }
}
