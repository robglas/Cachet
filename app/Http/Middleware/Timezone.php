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

class Timezone
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
<<<<<<< HEAD
     * @param string                   $type
=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($tz = $request->header('Time-Zone')) {
            app('config')->set('cachet.timezone', $tz);
        }

        return $next($request);
    }
}
