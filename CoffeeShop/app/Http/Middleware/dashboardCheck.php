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
        if (!Session::has('user')) {
            if (Cookie::has('user')) {
                $user = json_decode(Cookie::get('user'), true);
                if ($user) {
                    Session::put('user', $user);
                } else {
                    return redirect('/login');
                }
            } else {
                return redirect('/login');
            }
        }

        return $next($request);
    }
}