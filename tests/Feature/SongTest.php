<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SongTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->postJson('/api/category',['name'=>'Swahili']);

        $response
            ->assertStatus(201)
            ->assertJson(['message'=>'Successfully Created']);
    }
}
