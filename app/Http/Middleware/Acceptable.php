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
use Symfony\Component\HttpKernel\Exception\NotAcceptableHttpException;

class Acceptable
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
<<<<<<< HEAD
     * @param string                   $type
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $type)
    {
        if (!$request->accepts($type)) {
=======
     * @param string|null              $type
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $type = null)
    {
        if (!$request->accepts($type ?: 'accept:application/json')) {
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            throw new NotAcceptableHttpException();
        }

        return $next($request);
    }
}
