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
 * This is the feed routes class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class FeedRoutes
{
    /**
     * Define the status page routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
<<<<<<< HEAD
     */
    public function map(Registrar $router)
    {
        // Prevent access until the app is setup.
        $router->group([
            'middleware' => 'app.hasSetting',
            'setting'    => 'app_name',
        ], function ($router) {
            $router->get('/atom/{component_group?}', [
                'as'   => 'feed.atom',
                'uses' => 'AtomController@feedAction',
            ]);
            $router->get('/rss/{component_group?}', [
                'as'   => 'feed.rss',
                'uses' => 'RssController@feedAction',
=======
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => ['web', 'ready']], function ($router) {
            $router->get('/atom/{component_group?}', [
                'as'   => 'feed.atom',
                'uses' => 'FeedController@atomAction',
            ]);
            $router->get('/rss/{component_group?}', [
                'as'   => 'feed.rss',
                'uses' => 'FeedController@rssAction',
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            ]);
        });
    }
}
