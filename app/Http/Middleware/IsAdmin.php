<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
   
        return redirect('dash.register')->with(‘error’,"You don't have admin access.");
    }
}
