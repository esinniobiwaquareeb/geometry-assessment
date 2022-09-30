<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GeoTest extends TestCase
{
    public function testRoot()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // Unit Test for Testing circle starts here
    public function testCircle() {
        $response = $this->json('GET', '/circle/2');
        $response->assertStatus(200);
        $response->assertJsonFragment (
            [
                "type"=> "circle",
                "radius"=> 2,
                "surface"=> 12.56,
                "circumference"=> 12.56
            ]

        );

    }
    // Unit Test for Testing circle starts here

    // Unit Test for Testing triangle starts here
    public function testTriangle() {
        $response = $this->json('GET', '/triangle/3/4/5');
        $response->assertStatus(200);
        $response->assertJsonFragment (
            [
                "type"=> "triangle",
                "a"=> 3,
                "b"=> 4,
                "c"=> 5,
                "surface"=> 6,
                "circumference"=> 12
            ]

        );

    }
    // Unit Test for Testing triangle ends here


}
