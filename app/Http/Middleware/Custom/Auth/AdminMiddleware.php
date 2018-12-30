<?php

namespace App\Http\Middleware\Custom\Auth;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;


class AdminMiddleware
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

        return $next($request);

    }
}
