<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class SubscribersConfigured
{
    /**
<<<<<<< HEAD
     * We're verifying that subscribers is both enabled and configured.
=======
     * Handle an incoming request.
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!subscribers_enabled()) {
            return Redirect::route('status-page');
        }

        return $next($request);
    }
}
