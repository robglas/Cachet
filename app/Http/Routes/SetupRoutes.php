<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

/**
 * This is the setup routes class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SetupRoutes
{
    /**
     * Define the setup routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
<<<<<<< HEAD
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'app.isSetup'], function ($router) {
=======
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => ['web', 'setup']], function ($router) {
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            $router->controller('setup', 'SetupController');
        });
    }
}
