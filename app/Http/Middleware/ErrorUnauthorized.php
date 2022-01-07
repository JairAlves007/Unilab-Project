<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Unauthorized
{

    public function handle(Request $request, Closure $next)
    {
        $s = $request->session()->get('s');


        // code
        if($s === null) {
            if(auth()->user()) {
                return redirect("/dashboard");
            } else {
                return redirect("/");
            }
        }

        return $next($request);
    }

}
