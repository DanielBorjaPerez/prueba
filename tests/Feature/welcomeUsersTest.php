<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class welcomeUsersTest extends TestCase
{

    use RefreshDatabase;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_welcomes_users_with_nickname()
    {
        $this->get('/saludo/daniel/danielo')
            ->assertStatus(200)
            ->assertSee('bienvenido daniel, tu apodo es danielo');
    }

    public function test_it_welcomes_users_without_nickname()
    {
        $this->get('/saludo/daniel')
            ->assertStatus(200)
            ->assertSee('bienvenido daniel, no tienes apodo');
    }
}
