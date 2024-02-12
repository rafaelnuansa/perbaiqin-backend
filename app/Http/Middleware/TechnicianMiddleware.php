<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TechnicianMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->guard('technician')->check()) {
            return redirect()->route('technician.login');
        }

        return $next($request);
    }
}
