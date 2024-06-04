<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SetLoginCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the request is for the login page
        if ($request->is('login')) {
            // Set a cookie with a name, value, and expiration time (minutes)
            Cookie::queue('visited_login', 'true', 60); // 60 minutes
        }

        return $next($request);
    }
}
