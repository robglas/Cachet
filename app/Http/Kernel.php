<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        'Fideloper\Proxy\TrustProxies',
        'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
<<<<<<< HEAD
        'Illuminate\Cookie\Middleware\EncryptCookies',
        'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
        'Illuminate\Session\Middleware\StartSession',
        'Illuminate\View\Middleware\ShareErrorsFromSession',
=======

    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            'Illuminate\Cookie\Middleware\EncryptCookies',
            'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
            'Illuminate\Session\Middleware\StartSession',
            'Illuminate\View\Middleware\ShareErrorsFromSession',
            'Illuminate\Foundation\Http\Middleware\VerifyCsrfToken',
        ],
        'api' => [
            'CachetHQ\Cachet\Http\Middleware\Acceptable',
            'CachetHQ\Cachet\Http\Middleware\Timezone',
        ],
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
<<<<<<< HEAD
        'accept'            => 'CachetHQ\Cachet\Http\Middleware\Acceptable',
        'admin'             => 'CachetHQ\Cachet\Http\Middleware\Admin',
        'app.hasSetting'    => 'CachetHQ\Cachet\Http\Middleware\HasSetting',
        'app.isSetup'       => 'CachetHQ\Cachet\Http\Middleware\AppIsSetup',
        'app.subscribers'   => 'CachetHQ\Cachet\Http\Middleware\SubscribersConfigured',
        'auth'              => 'CachetHQ\Cachet\Http\Middleware\Authenticate',
        'auth.api'          => 'CachetHQ\Cachet\Http\Middleware\ApiAuthenticate',
        'auth.basic'        => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        'auth.api.optional' => 'CachetHQ\Cachet\Http\Middleware\ApiOptionalAuthenticate',
        'csrf'              => 'Illuminate\Foundation\Http\Middleware\VerifyCsrfToken',
        'guest'             => 'CachetHQ\Cachet\Http\Middleware\RedirectIfAuthenticated',
        'localize'          => 'CachetHQ\Cachet\Http\Middleware\Localize',
        'timezone'          => 'CachetHQ\Cachet\Http\Middleware\Timezone',
        'throttling'        => 'GrahamCampbell\Throttle\Http\Middleware\ThrottleMiddleware',
=======
        'admin'       => 'CachetHQ\Cachet\Http\Middleware\Admin',
        'auth'        => 'CachetHQ\Cachet\Http\Middleware\Authenticate',
        'auth.api'    => 'CachetHQ\Cachet\Http\Middleware\ApiAuthentication',
        'guest'       => 'CachetHQ\Cachet\Http\Middleware\RedirectIfAuthenticated',
        'localize'    => 'CachetHQ\Cachet\Http\Middleware\Localize',
        'ready'       => 'CachetHQ\Cachet\Http\Middleware\ReadyForUse',
        'setup'       => 'CachetHQ\Cachet\Http\Middleware\SetupAlreadyCompleted',
        'subscribers' => 'CachetHQ\Cachet\Http\Middleware\SubscribersConfigured',
        'throttling'  => 'GrahamCampbell\Throttle\Http\Middleware\ThrottleMiddleware',
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    ];
}
