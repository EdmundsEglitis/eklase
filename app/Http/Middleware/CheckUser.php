<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->user()) {
            return redirect('/');
        }

        return $next($request);
    }
}