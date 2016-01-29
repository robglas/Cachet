<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Api;

<<<<<<< HEAD
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SubscriberTest extends AbstractTestCase
{
    use DatabaseMigrations;

=======
/**
 * This is the subscriber test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class SubscriberTest extends AbstractApiTestCase
{
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    public function testGetSubscribersUnauthenticated()
    {
        $this->get('/api/v1/subscribers');
        $this->assertResponseStatus(401);
        $this->seeHeader('Content-Type', 'application/json');
    }

    public function testGetSubscribers()
    {
        $this->beUser();

        $subscriber = factory('CachetHQ\Cachet\Models\Subscriber')->create();

        $this->get('/api/v1/subscribers');
        $this->seeHeader('Content-Type', 'application/json');
        $this->assertResponseOk();
    }

    public function testCreateSubscriber()
    {
        $this->beUser();

<<<<<<< HEAD
        $this->expectsEvents('CachetHQ\Cachet\Events\Subscriber\SubscriberHasSubscribedEvent');
=======
        $this->expectsEvents('CachetHQ\Cachet\Bus\Events\Subscriber\SubscriberHasSubscribedEvent');
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        $this->post('/api/v1/subscribers', [
            'email' => 'james@cachethq.io',
        ]);
        $this->assertResponseOk();
        $this->seeHeader('Content-Type', 'application/json');
        $this->seeJson(['email' => 'james@cachethq.io']);
    }

    public function testCreateSubscriberAutoVerified()
    {
        $this->beUser();

        $this->post('/api/v1/subscribers', [
            'email'  => 'james@cachethq.io',
            'verify' => true,
        ]);
        $this->assertResponseOk();
        $this->seeHeader('Content-Type', 'application/json');
        $this->seeJson(['email' => 'james@cachethq.io']);
    }

    public function testDeleteSubscriber()
    {
        $this->beUser();

        $subscriber = factory('CachetHQ\Cachet\Models\Subscriber')->create();
        $this->delete("/api/v1/subscribers/{$subscriber->id}");
        $this->assertResponseStatus(204);
    }
}
