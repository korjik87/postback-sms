<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class PostbackControllerTest extends TestCase
{

    const service = ['wa', 'fd', 'wp'];
    const country = ['se', 51];

    public function testGetNumber()
    {

        $response = $this->getJson("/api/getNumber?country={$this::country[0]}&service={$this::service[1]}");
        $response->assertStatus(200)->assertJsonStructure(['code', 'number', 'activation', 'cost']);
    }

    public function testGetSms()
    {
        $response = $this->getJson("/api/getSms?activation=10869836");
        $response->assertStatus(200)->assertJsonStructure(['code', 'sms']);
    }

    public function testCancelNumber()
    {
        $response = $this->getJson("/api/cancelNumber?activation=10869836");
        $response->assertStatus(200)->assertJsonStructure(['code', 'activation', 'status']);
    }

    public function testGetStatus()
    {
        $response = $this->getJson("/api/getStatus?activation=10869836");
        $response->assertStatus(200)->assertJsonStructure(['code', 'status', 'count_sms']);
    }
}
