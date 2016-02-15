<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function testAUserCanBeFoundByUsername()
    {
        $createdUser = factory(User::class)->create(['username' => 'max']);

        $foundUser = User::findByUserName('max');

        $this->assertEquals($createdUser->id, $foundUser->id);
        $this->assertEquals($createdUser->username, $foundUser->username);
    }
}
