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
 * This is the auth routes class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class AuthRoutes
{
    /**
     * Define the auth routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
<<<<<<< HEAD
     */
    public function map(Registrar $router)
    {
        $router->group([
            'as'         => 'auth.',
            'middleware' => 'app.hasSetting',
            'prefix'     => 'auth',
            'setting'    => 'app_name',
        ], function ($router) {
=======
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group(['as' => 'auth.', 'middleware' => ['web', 'ready'], 'prefix' => 'auth'], function ($router) {
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            $router->get('login', [
                'middleware' => 'guest',
                'as'         => 'login',
                'uses'       => 'AuthController@showLogin',
            ]);

            $router->post('login', [
<<<<<<< HEAD
                'middleware' => ['guest', 'csrf', 'throttling:10,10'],
                'uses'       => 'AuthController@postLogin',
            ]);

            // Two factor authorization
=======
                'middleware' => ['guest', 'throttling:10,10'],
                'uses'       => 'AuthController@postLogin',
            ]);

>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            $router->get('2fa', [
                'as'   => 'two-factor',
                'uses' => 'AuthController@showTwoFactorAuth',
            ]);

            $router->post('2fa', [
<<<<<<< HEAD
                'middleware' => ['csrf', 'throttling:10,10'],
=======
                'middleware' => ['throttling:10,10'],
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                'uses'       => 'AuthController@postTwoFactor',
            ]);

            $router->get('logout', [
                'as'         => 'logout',
                'uses'       => 'AuthController@logoutAction',
                'middleware' => 'auth',
            ]);
        });
    }
}
