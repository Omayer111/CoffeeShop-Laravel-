<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class dashboardCheck
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the session contains user data
        if (!Session::has('user')) {
            // Check if the cookie contains user data
            if (Cookie::has('user')) {
                $user = json_decode(Cookie::get('user'), true);
                if ($user) {
                    // Restore user session from cookie
                    Session::put('user', $user);
                } else {
                    // If no valid user data, redirect to login
                    return redirect('/login');
                }
            } else {
                // If no session or cookie, redirect to login
                return redirect('/login');
            }
        }

        return $next($request);
    }
}