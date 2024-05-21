<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the session contains user data
        if (Session::has('user')) {
            return redirect('/'); // Redirect to the home page or any other page
        }

        // Check if the cookie contains user data
        if (Cookie::has('user')) {
            $user = json_decode(Cookie::get('user'), true);
            if ($user) {
                Session::put('user', $user); // Restore user session from cookie
                return redirect('/'); // Redirect to the home page or any other page
            }
        }

        return $next($request);
    }
}