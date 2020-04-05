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
        $response = $this->postJson('/api/song',[
            'title'=>'Amazing Grace',
            'number'=>'101',
            'chorus'=>'Amazing Grace Amazing Grace Amazing Grace Amazing Grace',
            'song'=>'Amazing Grace Amazing Grace Amazing Grace Amazing Grace',
            'category_id'=>'1'
        ]);

        $response
            ->assertStatus(201)
            ->assertExactJson(['message'=>'Successfully Created']);
    }
}
