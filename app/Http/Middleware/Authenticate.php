<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
// use Illuminate\Http\Request;

class Authenticate extends Middleware
{
   public function handle($request, Closure $next, ...$guards)
   {
    if (!auth()->check()){
        return redirect()->route('login');
    }

    return $next($request);
   }
}
