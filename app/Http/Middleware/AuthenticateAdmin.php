<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AuthenticateAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if (Gate::allows('is_admin')) {
            // IF USER AUTH AND BOOLEAN LET USER GOING TO REQUEST
            return $next($request);
        }
        // IF USER AUTH AND IN NOT BOOLEAN != 1
        throw new AuthorizationException;
    }
}
