<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDatabase()
    {
        factory(User::class)->create(['email' => 'sally@example.com']);

        $this->assertDatabaseHas('users', [
            'email' => 'sally@example.com'
        ]);
    }
}
