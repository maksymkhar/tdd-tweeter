<?php

use App\Tweet;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewAnotherUsersTweetsTest extends TestCase
{
    use DatabaseMigrations;

    public function testViewAnotherUsersTweets()
    {
        $user = factory(User::class)->create(['username' => 'max']);
        $tweet = factory(Tweet::class)->make(['body' => 'Hololo!']);
        $user->tweets()->save($tweet);

        $this->visit('/max')
            ->see('Hololo!');
    }
}