<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Functional;

use CachetHQ\Tests\Cachet\AbstractTestCase;
use Illuminate\Contracts\Console\Kernel;

<<<<<<< HEAD
=======
/**
 * This is the command test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
class CommandTest extends AbstractTestCase
{
    public function testMigrations()
    {
        $this->assertSame(0, $this->app->make(Kernel::class)->call('migrate', ['--force' => true]));
    }
}
