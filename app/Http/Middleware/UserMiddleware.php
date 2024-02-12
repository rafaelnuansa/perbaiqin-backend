<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->guard('web')->check()) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
