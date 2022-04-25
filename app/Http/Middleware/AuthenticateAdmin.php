<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if (auth() -> guest()) {
            // IF USER GUEST MUST BE LOGIN BEFORE THAT
            return redirect() -> route("login");

        }elseif(auth() -> user() -> boolean === 1){
            // IF USER AUTH AND BOOLEAN LET USER GOING TO REQUEST
            return $next($request);
        }else{
            // IF USER AUTH AND IN NOT BOOLEAN != 1
            return redirect() -> back();
        }
    }
}