<?php

namespace App\Http\Middleware\Custom\Auth;

use Closure;

class Customer
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
        $request->user()->authorizeRoles('customer');
        $request->attributes->add(['customer' => $request->user()]);
        return $next($request);
    }
}
