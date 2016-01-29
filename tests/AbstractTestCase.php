<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet;

<<<<<<< HEAD
use CachetHQ\Cachet\Models\User;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\TestCase;

=======
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\TestCase;

/**
 * This is the abstract test case class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
abstract class AbstractTestCase extends TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
<<<<<<< HEAD

    /**
     * Become a user.
     */
    protected function beUser()
    {
        $this->user = factory(User::class)->create();

        $this->be($this->user);
    }
=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
}
