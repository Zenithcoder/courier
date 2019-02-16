<?php

namespace App\Http\Middleware\Custom\Auth;

use Closure;

class AdminCustomer
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
        $user = $request->user();
        $user->authorizeRoles(['admin', 'customer']);
        if($user->isCustomer()) $request->attributes->add(['customer' => $user]);
        else $request->attributes->add(['admin' => $user]);
        return $next($request);
    }
}
