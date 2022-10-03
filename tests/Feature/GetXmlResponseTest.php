<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GetXmlResponseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_xml_response()
    {
        $response = $this->get('/api/products/xml');

        $response->assertStatus(200);
    }
}
