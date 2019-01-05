<?php

namespace App\Http\Middleware\Custom\Auth;

use Closure;

class Rider
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
        $request->user()->authorizeRoles('rider');
        $request->attributes->add(['rider' => $request->user()]);
        return $next($request);
    }
}
