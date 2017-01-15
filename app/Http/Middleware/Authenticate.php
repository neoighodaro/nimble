<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Do authentication check...and return something if failed...

        return $next($request);
    }
}
