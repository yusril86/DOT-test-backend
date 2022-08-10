<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_get_provincies()
    {
        $response = $this->get('/getProvince');
        $response->assertStatus(200);
    }

    public function test_get_cities()
    {
        $response = $this->get('/getCities');
        $response->assertStatus(200);
    }

    // public function test_search_provincies_from_api()
    // {
    //     $response = $this->get('api/search/provinces', ['id' => 11 , 'from-api' => true]);
    //     $response->assertStatus(200);
    // }

    // public function test_search_cities_from_api()
    // {
    //     $response = $this->get('api/search/cities', ['id' => 11 , 'from-api' => true]);
    //     $response->assertStatus(200);
    // }

    // public function test_search_provincies_from_database()
    // {
    //     $response = $this->get('api/search/provinces', ['id' => 11 , 'from-api' => false]);
    //     $response->assertStatus(200);
    // }

    // public function test_search_cities_from_database()
    // {
    //     $response = $this->get('api/search/cities', ['id' => 11 , 'from-api' => false]);
    //     $response->assertStatus(200);
    // }

}
