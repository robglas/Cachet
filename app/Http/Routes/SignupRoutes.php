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
 * This is the signup routes class.
 *
 * @author Joseph Cohen <joe@alt-three.com>
 */
class SignupRoutes
{
    /**
     * Define the signup routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
<<<<<<< HEAD
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => ['app.hasSetting', 'guest'],
            'setting'    => 'app_name',
            'as'         => 'signup.',
        ], function ($router) {
=======
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => ['web', 'ready', 'guest'], 'as' => 'signup.'], function ($router) {
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            $router->get('signup/invite/{code}', [
                'as'   => 'invite',
                'uses' => 'SignupController@getSignup',
            ]);

            $router->post('signup/invite/{code}', [
                'uses' => 'SignupController@postSignup',
            ]);
        });
    }
}
