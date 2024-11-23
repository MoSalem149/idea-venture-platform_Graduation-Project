<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsInvestor {
    public function handle(Request $request, Closure $next) {
        if (auth()->user() && auth()->user()->user_type === 'investor') {
            return $next($request);
        }

        return redirect('/dashboard')->with('error', 'Unauthorized access.');
    }
}
