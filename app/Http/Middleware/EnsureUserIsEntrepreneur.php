<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsEntrepreneur {
    public function handle(Request $request, Closure $next) {
        if (auth()->user() && auth()->user()->user_type === 'entrepreneur') {
            return $next($request);
        }

        return redirect('/dashboard')->with('error', 'Unauthorized access.');
    }
}