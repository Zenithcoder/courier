<?php

namespace App\Http\Middleware\Custom\Auth;

use Closure;

class AdminRider
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
        $user->authorizeRoles(['admin', 'rider']);
        if($user->isRider()) $request->attributes->add(['rider' => $user]);
        else $request->attributes->add(['admin' => $user]);
        return $next($request);
    }
}
