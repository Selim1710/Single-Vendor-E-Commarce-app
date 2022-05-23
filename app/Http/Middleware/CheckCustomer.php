<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCustomer
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()) {
            return $next($request);
        }else{
            return redirect()->route('users.login.form')->with('error','Please login first');
        }
    }
}
