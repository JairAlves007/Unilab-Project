<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ErrorUnauthorized
{
    
    public function handle(Request $request, Closure $next)
    {
        $errors = $request->session()->get('errors');


        // code
        if($errors === null) {
            if(auth()->user()) {
                return redirect("/dashboard");
            } else {
                return redirect("/");
            }
        }
        
        return $next($request);
    }

}
