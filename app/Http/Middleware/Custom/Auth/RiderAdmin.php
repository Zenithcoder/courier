<?php

namespace App\Http\Middleware\Custom\Auth;

use Closure;

class RiderAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->user()->authorizeRoles(['rider', 'admin']);
        return $next($request);
    }
}
