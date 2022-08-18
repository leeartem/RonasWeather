<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class getCurrentWeatherByCoordinatesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/v1/current/geo?lat=51.5073&lon=-0.1276');
        
        $this->assertTrue($response->original["cod"] === 200);
    }
}
