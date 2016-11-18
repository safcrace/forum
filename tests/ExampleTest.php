<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Sender Flores',
            'email' => 'safcrace@gmail.com',
        ]);
        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Sender Flores')
             ->see('safcrace@gmail.com');
    }
}
