<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{

    use RefreshDatabase;

   /**
     * A basic test example.
     *
     * @return void
     */
    
    function test_it_loads_the_users_list_page()
    {

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('usuarios');
    }

    function test_it_displays_the_users_details()
    {

        $this->get('/usuarios/ .$user->id')
            ->assertStatus(200);
            
    }

    function test_it_loads_the_new_users_page()
    {

        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('nuevo');
    }

    
}
